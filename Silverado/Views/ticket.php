<?php
// Header: Do not remove.
include_once('inc/header.php');
?>

<main class="wrapper yellow-bg round-first">
	<h2>Tickets</h2>

<?php
// foreach ($_SESSION['cart'] as $id => $booking) {
	for($i=0; $i < $booking->sa; $i++) { ?>
		<div class="ticket-details">
			<h4>Title &amp; Screening ID: <i><?= $booking->screening->movie->name; ?></i> &amp; <?= $booking->screeningId ?></h4>
			<li>
				<i>Ticket Type: SA</i>
			</li>
			<li>
				<i>Day: <?= $booking->screening->day; ?></i>
			</li>
			<li>
				<i>Time: <?= $booking->screening->time; ?></i>
			</li>
			<li>
				<i>Runtime: <?= $booking->screening->movie->duration; ?></i>
			</li>
			<li>
				<i>Theatre #<?= $booking->screening->roomId; ?></i>
			</li>
		</div>
	<?php }
	for($i=0; $i < $booking->sp; $i++) { ?>
		<div class="ticket-details">
			<h4>Title &amp; Screening ID: <i><?= $booking->screening->movie->name; ?></i> &amp; <?= $booking->screeningId ?></h4>
			<li>
				<i>Ticket Type: SP</i>
			</li>
			<li>
				<i>Day: <?= $booking->screening->day; ?></i>
			</li>
			<li>
				<i>Time: <?= $booking->screening->time; ?></i>
			</li>
			<li>
				<i>Runtime: <?= $booking->screening->movie->duration; ?>min</i>
			</li>
			<li>
				<i>Theatre #<?= $booking->screening->roomId; ?></i>
			</li>
		</div>
	<?php
	}
// }
?>

	<!-- <?php } ?> -->
</main>

<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

<?php
// Footer: Do not remove.
include_once('inc/footer.php');
?>
