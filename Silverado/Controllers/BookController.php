<?php
namespace Silverado\Controllers;

use Silverado\Models\ScreeningModel;

class BookController extends AbstractController {

	protected $screening;

	public function __construct($args = []) {

		$this->screening = ScreeningModel::getById($args[0]);
		$this->renderView('book');
		
	}

}