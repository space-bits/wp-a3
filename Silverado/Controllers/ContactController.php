<?php
namespace Silverado\Controllers;

use Silverado\Utils\HttpRequest;

class ContactController extends AbstractController {


	public function __construct(HttpRequest $httpRequest, array $args)
	{

	}

	public function contact(HttpRequest $httpRequest, array $args)
	{

		$this->renderView('contact');

	}

}
