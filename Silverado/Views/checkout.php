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

				<?php if(isset($_SESSION['user']) && ($_SESSION['user']->voucher == 'true')) {
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
				include('static/addBookingToCart.php')
				?>
			</div>
		</article>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
