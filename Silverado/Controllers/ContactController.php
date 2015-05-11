<?php
namespace Silverado\Controllers;


class ContactController extends AbstractController {


	public function __construct($args = [])
	{
		
	}


	public function contact($args = [])
	{

		$this->renderView('contact');

	}

}