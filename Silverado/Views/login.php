<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Login</h2>
		<?php
		//search db for existing user, if user exists set session with their details and assign booking to their account
		//else, add new user and set booking to their account

		include('static/validateVoucher.php');
		include('inc/single-login.php');
		?>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
