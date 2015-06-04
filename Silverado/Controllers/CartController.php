<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Models\UserModel;
use Silverado\Utils\HttpRequest;


class CartController extends AbstractController
{


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}


	public function displayCart(HttpRequest $httpRequest, array $args)
	{

		if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
		{
			$this->renderView('cart');
		} else {
			$this->renderView('emptyCart');
		}

	}

	//Not implemented yet.
	// public function editCart(HttpRequest $httpRequest, array $args)
	// {
	//
	// 	$args[1]; // bookingId
	// 	$this->renderView('editCart');
	//
	// }


	public function deleteBooking(HttpRequest $httpRequest, array $args)
	{

		unset($_SESSION['cart'][$args[1]]);
		$this->renderView('cart');

	}
}
