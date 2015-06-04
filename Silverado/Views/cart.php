<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Cart</h2>
		<ul>
		<?php foreach ($_SESSION['cart'] as $id => $booking) { ?>
			<li>
				<a href="<?= getBaseUri(); ?>cart/<?= $id; ?>">
					<?= $booking->screening->movie->name; ?> ($ <?= $booking->calculate(); ?>.00)
				</a>
			</li>
		<?php } ?>
		</ul>
	</main>

	<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
