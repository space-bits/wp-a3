<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Checkout</h2>
		<article>
			<div class="basket">
				<span class="voucher">
					<h3>Enter your voucher here!</h3>
					<input name="code" id="voucher" value="" placeholder="12345-67890-TK" type="text" pattern="(\d){5}-(\d){5}-[a-zA-Z]{2}"></input>
				</span>
				<?php

				//Script to validate voucher from user input to make sure chksums match
				include('static/validateVoucher.php');
				?>
			</div>
		</article>
	</main>

<?php
	// Footer: Do not remove.
	include_once('inc/footer.php');
?>
