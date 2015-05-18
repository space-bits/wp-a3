<?php
namespace Silverado\Controllers;

class CheckoutController extends AbstractController {

	public function __construct($args = []) {


	}

	public function checkout($args = [])
	{

		$this->renderView('checkout');

	}

}
