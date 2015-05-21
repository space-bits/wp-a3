<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Models\UserModel;
use Silverado\Utils\HttpRequest;


class RegisterController extends AbstractController
{


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}


	public function displayForm(HttpRequest $httpRequest, array $args)
	{

		$this->renderView('register');

	}


	public function validateRegistration(HttpRequest $httpRequest, array $args)
	{



	}



}
