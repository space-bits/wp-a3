<?php
namespace Silverado\Controllers;

class MainController extends AbstractController {

	public function __construct($args) {
		$this->renderView('index');
	}

}