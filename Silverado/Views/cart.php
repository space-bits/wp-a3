<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Cart</h2>
		<ul>
		<?php foreach ($_SESSION['cart'] as $id => $booking) { ?>
			<li>
				<?= $booking->screening->movie->name; ?> - $<?php printf("%.2f", $booking->totals['total']); ?>
				(<a href="<?= getBaseUri(); ?>cart/<?= $id; ?>/delete">Delete</a>)
				<ul>
					<li>
						<?= $booking->screening->day; ?>
					</li>
					<li>
						<?= $booking->screening->time; ?>
					</li>
				</ul>
			</li>
		<?php } ?>
		</ul>
		<a href="<?= getBaseUri(); ?>ticket/">View Ticket</a><br>
		<a href="<?= getBaseUri(); ?>checkout/">Checkout</a>
	</main>

	<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
