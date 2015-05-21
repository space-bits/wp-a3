<?php
namespace Silverado\Controllers;

use Silverado\Models\ScreeningModel;
use Silverado\Utils\HttpRequest;

class BookController extends AbstractController
{

	protected $screening;


	public function __construct(HttpRequest $httpRequest, array $args)
	{



	}

	public function book(HttpRequest $httpRequest, array $args)
	{

		$this->screening = ScreeningModel::getById($args[1]);
		$this->renderView('book');

	}

}
