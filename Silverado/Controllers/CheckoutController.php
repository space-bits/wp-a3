<?php
namespace Silverado\Controllers;

use Silverado\Utils\HttpRequest;
use Silverado\Models\BookingModel;

class CheckoutController extends AbstractController {


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}

	public function place(HttpRequest $httpRequest, array $args)
	{


		// echo '<pre class="yellow-bg">';
		// print_r($httpRequest->vars['code']);
		// echo '</pre>';

		$booking = new BookingModel($httpRequest->vars);

		$booking->hasVoucher = $booking->validateVoucher($httpRequest->vars['code']);

		$_SESSION['cart'][] = $booking;

		$this->renderView('cart');

	}


	public function checkout(HttpRequest $httpRequest, array $args)
	{

		foreach ($_SESSION['cart'] as $id => $booking) {
			$booking->save();
			unset($_SESSION['cart'][$id]);
		}
		$this->renderView('emptyCart');
	}
}
