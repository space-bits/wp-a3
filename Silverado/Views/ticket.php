<?php
// Header: Do not remove.
include_once('inc/header.php');
?>

<main class="wrapper yellow-bg round-first">
	<h2>Tickets</h2>

<?php
	foreach ($_SESSION['cart'] as $id => $booking) {
		echo '<h3>' . $booking->screening->movie->name . '</h3>';
		foreach($booking->totals as $key => $value ){
			if ($key != 'total' && $value > 0) {
				printf("%d %s - $%.2f", $booking->$key, $key, $value);
				echo '<br>';
			}
		}
	 	printf("Total $%.2f", $booking->totals['total']);
	}
?>
<br>
<a href="<?= getBaseUri(); ?>cart">Return to Cart</a>
</main>

<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

<?php
// Footer: Do not remove.
include_once('inc/footer.php');
?>
