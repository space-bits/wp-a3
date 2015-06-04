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
										foreach ($_SESSION['cart'] as $id => $booking) {
											for($i=0; $i < $booking->sa; $i++) {
												echo '<div class="ticket-details">';
												echo '<h4>Ticket Type: '.$_SESSION['cart'][$i]->sa.' </h4>';
												echo '<li>';
												echo '<i>Day: '.$booking->screening->day;
												echo '</i>';
												echo '</li>';
												echo '<li>';
												echo '<i>Time: '.$booking->screening->time;
												echo '</i>';
												echo '</li>';
												echo '<li>';
												echo '<i>Runtime: '.$booking->screening->movie->duration.' Minutes';
												echo '</i>';
												echo '</li>';
												echo '<li>';
												echo '<i>Theatre #'.$booking->screening->roomId;
												echo '</i>';
												echo '</li>';
												echo '</div>';
											}
										}?>

										<!-- <?php } ?> -->
									</main>

									<script src="<?= getAssetUri('static/js/errorToggle.js'); ?>"></script>

									<?php
									// Footer: Do not remove.
									include_once('inc/footer.php');
									?>
