<?php
namespace Silverado\Controllers;

class MainController extends AbstractController {

	public function __construct($httpRequest = [], $args = []) {


	}

	public function index($httpRequest = [], $args = [])
	{

		$this->renderView('index');

	}

}
