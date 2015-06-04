<?php
// Header: Do not remove.
include_once('inc/header.php');
?>

<main class="wrapper yellow-bg round-first">
	<h2>Tickets</h2>
	<!-- <?php foreach ($_SESSION['cart'] as $id => $booking) { ?>
		<div class="ticket">
		<h3><?= $booking->screening->movie->name; ?></h3>
		<ul class="ticket-details">
		<li>
		<i>Day: <?= $booking->screening->day; ?></i>
	</li>
	<li>
	<i>Time: <?= $booking->screening->time; ?></i>
</li>
<li>
<i>Runtime: <?= $booking->screening->movie->duration; ?></i>
</li>
<h4>Your Seats</h4>
<ul>
<?php
if(($booking->sa) != 0){
echo '<li>'; ?>
<?= $booking->sa; ?>
<?php echo 'SA';
echo '</li>';
}
if(($booking->sp) != 0){
echo '<li>'; ?>
<?= $booking->sp; ?>
<?php echo 'SP';
echo '</li>';
}
if(($booking->sc) != 0){
echo '<li>'; ?>
<?= $booking->sc; ?>
<?php echo 'SC';
echo '</li>';
}
if(($booking->fa) != 0){
echo '<li>'; ?>
<?= $booking->fa; ?>
<?php echo 'FA';
echo '</li>';
}
if(($booking->fc) != 0){
echo '<li>'; ?>
<?= $booking->fc; ?>
<?php echo 'FC';
echo '</li>';
}
if(($booking->b1) != 0){
echo '<li>'; ?>
<?= $booking->b1; ?>
<?php echo 'B1';
echo '</li>';
}
if(($booking->b2) != 0){
echo '<li>'; ?>
<?= $booking->b2; ?>
<?php echo 'B2';
echo '</li>';
}
if(($booking->b3) != 0){
echo '<li>'; ?>
<?= $booking->b3; ?>
<?php echo 'B3';
echo '</li>';
} ?>
</ul>
</ul>
</div> -->
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
				<i>Runtime: <?= $booking->screening->movie->duration; ?></i>
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
