<?php
	// Header: Do not remove.
	include_once('inc/header.php');
	if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST)) {
		$_SESSION['user']->username = $_POST['username'];
	}

?>

	<main class="wrapper yellow-bg round-first">
		<h2>Checkout</h2>
		<article>
			<div class="basket">
				<?php
						if((isset($_POST['regPass']) && isset($_POST['confPass'])) && (($_POST['confPass'] === $_POST['regPass']))) {
							if(isset($_POST['email'])) {
								$_SESSION['user']->email = $_POST['email'];
							}
							if(isset($_POST['phone'])) {
								$_SESSION['user']->phone = $_POST['phone'];
							}
							if(isset($_POST['firstname'])) {
								$_SESSION['user']->firstname = $_POST['firstname'];
							}
							if(isset($_POST['lastname'])) {
								$_SESSION['user']->lastname = $_POST['lastname'];
							} else {
								echo '<p> Failed to register. Passwords do not match.</p>';
								echo '<form method="POST" action="<?= getBaseUri(); ?>login" class="login-form">';
								echo '<input class="login" type="submit" value="Return">';
								echo '</form>';
							}
						} ?>



				<?php if($_SESSION['user']->voucher == 'true') {
					echo '<p>Voucher is valid. 20% discount applied! NOTE: Still needs implementation.</br>Either echo out hardcoded values, or use function to recalculate prices.</p>';
					} else { ?>
					<span class="voucher">
						<form method="POST" action="<?= getBaseUri(); ?>checkout" class="voucher-form">
							<h3>Enter your voucher here!</h3>
							<input name="code" id="voucher" value="" placeholder="12345-67890-TK" type="text" pattern="(\d){5}-(\d){5}-[a-zA-Z]{2}"></input>
							<input name="submit" id="button" value="Use voucher!" type="submit"></input>
						</form>
					</span>
				<?php }

				//Script to validate voucher from user input to make sure chksums match
				include('static/validateVoucher.php');
				?>
			</div>
		</article>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
