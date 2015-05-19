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
			<form method="POST" action="/checkout" class="login-form">
				<input type="text" placeholder="User Name" required>
				<input type="password" placeholder="Password" required>
			</form>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
