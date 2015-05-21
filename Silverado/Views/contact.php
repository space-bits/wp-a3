<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<!-- ########## Main ########## -->
	<main class="wrapper yellow-bg round-first">
		<h2>Contact us!</h2>
		<p>We are very excited to bring the best experience to you as we possibly can, but in the mean time, if you just can't wait to see the results of our renovations, send us an email and we'll do our best to answer you as soon as possible. Simply fill out the form below, and we'll get in touch!</p>
		<div class="form-map-info">
			<form method="POST" action="static/mail.php" class="contact-form">
				<input type="text" id="name" class="form-field form-first-element round-first" name="name" placeholder="Name" required>
				<input type="email" id="email" class="form-field form-middle-element" name="email" placeholder="your@email.com" required>
				<input type="text" id="subject" class="form-field form-middle-element" name="subject" placeholder="Subject" list="subjects" required>
				<datalist id="subjects" class="form-middle-element">
					<option value="General Enquiry">General Enquiry</option>
					<option value="Group &amp; Corporate Bookings">Group &amp; Corporate Bookings</option>
					<option value="Suggestion &amp; Complaints">Suggestions &amp; Complaints</option>
				</datalist>
				<textarea id="message" class="form-field form-last-element round-last" name="message" placeholder="Let us know what you think!" required></textarea>

				<label><input id="test-email" type='checkbox' name='test-email' value='true'> Send me a copy of this message.</label>

				<input type="submit" class="form-field round-only" id="submit" value="Send">
			</form>
			<div class="location-info">
				<div id="map-canvas"></div>
				<div class="location-details">
					<p>Address: 340 Swanston St, Melbourne</p>
					<p>Phone: 555-123-123</p>
					<p>Opening Hours: Mon-Sat</p>
				</div>
			</div>
		</div>
	</main>

	<!-- Google maps api js-->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="<?= getAssetUri('static/js/google-maps.js'); ?>"></script>
<?php
	// Footer: Do not remove.
	include_once('inc/aside.php');
	include_once('inc/footer.php');
?>
