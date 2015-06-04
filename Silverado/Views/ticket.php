<?php
// Header: Do not remove.
include_once('inc/header.php');
?>

<main class="wrapper yellow-bg round-first">
	<h2>Tickets</h2>
	<?php foreach ($_SESSION['cart'] as $id => $booking) { ?>
		<div class="ticket">
			<h3><?= $booking->screening->time; ?> <?= $booking->screening->day; ?></h3>
			<ul>
				<li>
					Your booking for <?= $booking->screening->movie->name; ?> is on
					<?= $booking->screening->day; ?> at <?= $booking->screening->time; ?>
					and has a <?= $booking->screening->movie->duration; ?> minute runtime.
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
			</div>
			<?php } ?>
		</main>

		<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

		<?php
		// Footer: Do not remove.
		include_once('inc/footer.php');
		?>
