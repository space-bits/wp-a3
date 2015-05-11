<?php
namespace Silverado\Controllers;

class MainController extends AbstractController {

	public function __construct($args = []) {


	}

	public function index($args = [])
	{

		$this->renderView('index');

	}

}