<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Login</h2>
		<?php
		//search db for existing user, if user exists set session with their details and assign booking to their account
		//else, add new user and set booking to their account
		//If user exists but enters wrong password, <div class="login-error" style="display: none"> should expand to show users extra info about fixing the is_resource
		//similar to more info toggle on the movie page

		include('inc/single-login.php');
		?>
		<div class="login-error" style="display: none">
			<!-- NOTE: This functionality is merely placeholder at this time. -->
			<p>Oh no! It seems you've entered the wrong password. If this is your account, this issue can be resolved by <a href="#">reseting your password</a>. </p>
		</div>
	</main>
	
	<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
