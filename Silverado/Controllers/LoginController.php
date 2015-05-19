<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;


class LoginController extends AbstractController
{

	protected $user;
	protected $password;

	public function __construct($httpRequest = [], $args = [])
	{

		$this->user = UserModel::getAll();
		$this->renderView('login');

	}

}
