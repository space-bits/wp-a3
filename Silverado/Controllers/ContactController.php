<?php
namespace Silverado\Controllers;

class ContactController extends AbstractController {

	public function __construct($args = []) {
		$this->renderView('contact');
	}

}