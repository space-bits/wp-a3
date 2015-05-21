<?php
namespace Silverado\Controllers;

use Silverado\Utils\HttpRequest;

class MainController extends AbstractController {

	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}

	public function index(HttpRequest $httpRequest, array $args)
	{

		$this->renderView('index');

	}

}
