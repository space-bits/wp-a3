<?php
namespace Silverado\Controllers;

use Silverado\Models\ScreeningModel;

class BookController extends AbstractController
{

	protected $screening;


	public function __construct($args = [])
	{

		
		
	}

	public function book($args = [])
	{
	
		$this->screening = ScreeningModel::getById($args[1]);
		$this->renderView('book');

	}

}