<?php
namespace Silverado\Controllers;


class ContactController extends AbstractController {


	public function __construct($httpRequest = [], $args = [])
	{

	}


	public function contact($httpRequest = [], $args = [])
	{

		$this->renderView('contact');

	}

}
