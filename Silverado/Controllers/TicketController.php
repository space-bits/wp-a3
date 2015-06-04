<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Models\BookingModel;
use Silverado\Models\UserModel;
use Silverado\Utils\HttpRequest;


class TicketController extends AbstractController
{


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}


	public function displayTicket(HttpRequest $httpRequest, array $args)
	{

		$this->renderView('ticket');

	}

}
