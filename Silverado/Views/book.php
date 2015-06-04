<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Booking</h2>
		<?php
			if (!$this->screening) {
				echo '<p>Sorry but we couldn\'t find your request.</p>';
			} else {
		?>
		<form method="POST" action="<?= getBaseUri();?>checkout" class="booking-form">
			<div class="booking-half-wrapper">
				<table class="booking-table round-table">
					<thead>
					<tr>
						<th>Ticket Type</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<tr class="ticket-row">
							<td>Adult</td>
							<td><label class="price"><?php echo $this->screening->price->sa; ?></label></td>
							<td><input class="quantity" type="number" name="sa" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Concession</td>
							<td><label class="price"><?php echo $this->screening->price->sp; ?></label></td>
							<td><input class="quantity" type="number" name="sp" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Child</td>
							<td><label class="price"><?php echo $this->screening->price->sc; ?></label></td>
							<td><input class="quantity" type="number" name="sc" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Premium Adult</td>
							<td><label class="price"><?php echo $this->screening->price->fa; ?></label></td>
							<td><input class="quantity" type="number" name="fa" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Premium Child</td>
							<td><label class="price"><?php echo $this->screening->price->fc; ?></label></td>
							<td><input class="quantity" type="number" name="fc" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Beanbag 1</td>
							<td><label class="price"><?php echo $this->screening->price->b1; ?></label></td>
							<td><input class="quantity" type="number" name="b1" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Beanbag 2</td>
							<td><label class="price"><?php echo $this->screening->price->b2; ?></label></td>
							<td><input class="quantity" type="number" name="b2" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Beanbag 3</td>
							<td><label class="price"><?php echo $this->screening->price->b3; ?></label></td>
							<td><input class="quantity" type="number" name="b3" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>

					</tbody>

				</table>
			</div>
			<div class="booking-half-wrapper">
				<table class="round-table">
					<thead>
					<tr>
						<th colspan=2>Results</th>
						</tr>
					</thead>
					<tr>
						<td>Film</td>
						<td><input type="text" name="film" value="<?php echo $this->screening->movie->film ?>" readonly></td>
					</tr>
					<tr>
						<td>Day</td>
						<td><input type="text" name="day" value="<?php echo $this->screening->day ?>" readonly></td>
					</tr>
					<tr>
						<td>Time</td>
						<td><input type="text" name="time" value="<?php echo $this->screening->time ?>" readonly></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><input id="total" type="text" name="price" value="$ 0.00" readonly></td>
					</tr>
					<tr>
						<td colspan=2><input type="submit" name="" value="Book"></td>
					</tr>
				</table>
			</div>
		</form>
		<?php } /* end else */ ?>


		<div class="room room-<?= $this->screening->room->name; ?>">
		<?php foreach ($this->screening->room->sectors as $sector) { ?>
			<div class="sector sector-<?= $sector->name; ?>">
			<?php foreach ($sector->seats as $seat) { ?>
				<div class="seat row-<?= $seat->row; ?> seat-<?= $seat->row . $seat->column; ?> status-<?= $seat->getStatus(); ?>">
					<?= $seat->row . $seat->column; ?>
				</div>
			<?php } // end foreach $seats ?>
			</div>
		<?php } // end foreach $sectors ?>
		</div>

	</main>

	<script src="<?= getAssetUri('static/js/booking.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
