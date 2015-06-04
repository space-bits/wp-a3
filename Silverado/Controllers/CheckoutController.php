<?php
namespace Silverado\Controllers;

use Silverado\Utils\HttpRequest;

class CheckoutController extends AbstractController {


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}

	public function checkout(HttpRequest $httpRequest, array $args)
	{

		$_SESSION['vars'] = $httpRequest->vars;

		$this->renderView('checkout');

	}

}
