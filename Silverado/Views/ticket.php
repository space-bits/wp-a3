<?php
// Header: Do not remove.
include_once('inc/header.php');
?>

<main class="wrapper yellow-bg round-first">
	<h2>Ticket</h2>
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
						if($booking->sa != 0){
							echo '<li>';
							$booking->sa; echo 'SA';
							echo '</li>';
						} ?>
						<li>
							<?= $booking->sp; ?> SP
						</li>
						<li>
							<?= $booking->sc; ?> SC
						</li>
						<li>
							<?= $booking->fa; ?> FA
						</li>
						<li>
							<?= $booking->fc; ?> FC
						</li>
						<li>
							<?= $booking->b1; ?> B1
						</li>
						<li>
							<?= $booking->b2; ?> B2
						</li>
						<li>
							<?= $booking->b3; ?> B3
						</li>
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
