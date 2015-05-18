<?php
namespace Silverado\Controllers;

use Silverado\Models\ScreeningModel;

class BookController extends AbstractController
{

	protected $screening;


	public function __construct($httpRequest = [], $args = [])
	{



	}

	public function book($httpRequest = [], $args = [])
	{

		$this->screening = ScreeningModel::getById($args[1]);
		$this->renderView('book');

	}

}
