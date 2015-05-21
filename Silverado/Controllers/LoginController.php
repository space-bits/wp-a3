<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Models\UserModel;
use Silverado\Utils\HttpRequest;


class LoginController extends AbstractController
{


	protected $user;
	protected $hash;



	public function __construct($httpRequest = [], $args = [])
	{


	}


	public function displayForm($httpRequest = [], $args = [])
	{

		$this->renderView('login');

	}
	

	public function validateLogin($httpRequest = [], $args = [])
	{
		if (!isset($httpRequest->vars['username']) || !$httpRequest->vars['password']) {
			$this->renderView('login');
			exit();
		}

		$username = $httpRequest->vars['username'];
		$password = $httpRequest->vars['password'];
		$user = UserModel::validateLogin($username, $password);

		// TODO: Better login interface. Needs Session.
		if ($user)
			$this->renderView('index');
		else
			$this->renderView('login');


	}
}
