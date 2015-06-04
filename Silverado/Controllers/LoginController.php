<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Models\UserModel;
use Silverado\Utils\HttpRequest;


class LoginController extends AbstractController
{

	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}


	public function displayForm(HttpRequest $httpRequest, array $args)
	{

		$this->renderView('login');

	}


	public function validateLogin(HttpRequest $httpRequest, array $args)
	{
		if (!isset($httpRequest->vars['username']) || !$httpRequest->vars['password']) {
			$this->renderView('login');
			exit();
		}

		$username = $httpRequest->vars['username'];
		$password = $httpRequest->vars['password'];
		$user = UserModel::validateLogin($username, $password);

		// TODO: Better login interface. Needs Session.
		if ($user) {
			$_SESSION['user'] = $user;
			$this->renderView('index');
		} else {
			$this->renderView('login');
		}

	}

	public function logout(HttpRequest $httpRequest, array $args)
	{

		session_destroy();
		$this->renderView('index');


	}


}
