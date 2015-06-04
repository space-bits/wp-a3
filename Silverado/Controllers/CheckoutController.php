<?php
namespace Silverado\Controllers;

use Silverado\Utils\HttpRequest;
use Silverado\Models\BookingModel;

class CheckoutController extends AbstractController {


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}

	public function checkout(HttpRequest $httpRequest, array $args)
	{

		$booking = new BookingModel($httpRequest->vars);
		$_SESSION['cart'] = $booking;

		$this->renderView('checkout');

	}

}
