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
		<form method="POST" action="/checkout.php" class="booking-form">
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
							<td><input class="quantity" type="number" name="SA" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Concession</td>
							<td><label class="price"><?php echo $this->screening->price->sp; ?></label></td>
							<td><input class="quantity" type="number" name="SP" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Child</td>
							<td><label class="price"><?php echo $this->screening->price->sc; ?></label></td>
							<td><input class="quantity" type="number" name="SC" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Premium Adult</td>
							<td><label class="price"><?php echo $this->screening->price->fa; ?></label></td>
							<td><input class="quantity" type="number" name="FA" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Premium Child</td>
							<td><label class="price"><?php echo $this->screening->price->fc; ?></label></td>
							<td><input class="quantity" type="number" name="FC" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Beanbag 1</td>
							<td><label class="price"><?php echo $this->screening->price->b1; ?></label></td>
							<td><input class="quantity" type="number" name="B1" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Beanbag 2</td>
							<td><label class="price"><?php echo $this->screening->price->b2; ?></label></td>
							<td><input class="quantity" type="number" name="B2" min="0" max="10" value="0" onchange="updateTotal()"></td>
							<td><label class="subtotal">0</label></td>
						</tr>
						<tr class="ticket-row">
							<td>Beanbag 3</td>
							<td><label class="price"><?php echo $this->screening->price->b3; ?></label></td>
							<td><input class="quantity" type="number" name="B3" min="0" max="10" value="0" onchange="updateTotal()"></td>
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
			<div class="voucher">
				<h3>Enter your voucher here!</h3>
					<input name="code" id="voucher" value="" placeholder="12345-67890-TK" type="text" pattern="(\d+){5}-(\d+){5}-[a-zA-Z]{2}"></input>
			</div>
		</form>
		<?php } /* end else */ ?>
	</main>

	<script src="<?= getAssetUri('static/js/booking.js'); ?>"></script>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
