		<form method="POST" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" class="brown-bg round-only">


  			
			<select>
				<option value="empty">Select Screening Session</option>
			<?php
				foreach ($screenings as $time => $days) {
					foreach ($days as $day) {
						echo '<option value="' . $day . '-' . $time . '">' . $day . ' - ' . $time . '</option>';
					}
				}
			?>
			</select>

			<table>
				<thead>
					<th>Ticket Type</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal Price</th>
				</thead>
				<tbody>
					<tr>
						<td>Adult</td>
						<td><input type="number" name="SA" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Concession</td>
						<td><input type="number" name="SP" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Child</td>
						<td><input type="number" name="SC" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Premium Adult</td>
						<td><input type="number" name="FA" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Premium Child</td>
						<td><input type="number" name="FC" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Beanbag 1</td>
						<td><input type="number" name="B1" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Beanbag 2</td>
						<td><input type="number" name="B2" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td>Beanbag 3</td>
						<td><input type="number" name="B3" min="0" max="10"></td>
						<td><label>$ 0.00</label></td>
					</tr>
					<tr>
						<td colspan=2>Total</td>
						<td><label>$ 0.00</label></td>
					</tr>

				</tbody>

			</table>





		</form>