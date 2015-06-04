<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Cart</h2>
		<ul>
		<?php foreach ($_SESSION['cart'] as $id => $booking) { ?>
			<li>
				<?= $booking->screening->movie->name; ?> - $<?php printf("%.2f", $booking->calculate()); ?>
				(<a href="<?= getBaseUri(); ?>cart/<?= $id; ?>/delete">Delete</a>)
			</li>
		<?php } ?>
		</ul>
	</main>

	<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
