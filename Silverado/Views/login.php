<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Checkout</h2>
		<?php
		//search db for existing user, if user exists set session with their details and assign booking to their account
		//else, add new user and set booking to their account
		?>
			<form method="POST" action="<?= getBaseUri(); ?>login" class="login-form">
				<input name="username" type="text" placeholder="User Name" required>
				<input name="password" type="password" placeholder="Password" required>
				<input type="submit">
			</form>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
