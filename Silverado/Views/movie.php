<?php include_once('inc/header.php'); ?>

	<!-- ########## Main ########## -->
	<main class="wrapper yellow-bg round-first">
		<h2>Movies</h2>

		<?php
			if (!$this->movies) {
				echo '<p>No films at this time, sorry! :\'(</p>';
			} else foreach ($this->movies as $movie) {
				include('inc/single-movie.php');
			}
		?>
	</main>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?= getAssetUri('static/js/toggle.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/aside.php');
	include_once('inc/footer.php');
?>
