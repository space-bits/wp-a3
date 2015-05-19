<?php
namespace Silverado\Controllers;

class CheckoutController extends AbstractController {


	public function __construct($httpRequest = [], $args = []) {


	}

	public function checkout($httpRequest = [], $args = [])
	{

		$this->renderView('checkout');

	}

}
