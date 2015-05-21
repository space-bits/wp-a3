<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Register</h2>
		<form method="POST" action="<?= getBaseUri(); ?>register">
			<input type="text" name="username" placeholder="Username" required>
			<input type="text" name="firstname" placeholder="First Name" required>
			<input type="text" name="lastname" placeholder="Last Name" required>
			<input type="password" name="password-1" placeholder="Password">
			<input type="password" name="password-2" placeholder="Retype Password">
			<input type="text" name="phone" placeholder="Phone">
			<input type="email" name="email" placeholder="Email">

			<input type="submit" value="Register">

		</form>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
