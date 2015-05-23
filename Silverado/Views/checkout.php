<?php
	// Header: Do not remove.
	include_once('inc/header.php');
?>

	<main class="wrapper yellow-bg round-first">
		<h2>Checkout</h2>
		<article>
			<div class="basket">
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
