<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;


class LoginController extends AbstractController
{

	protected $user;
	protected $hash;

	public function __construct($httpRequest = [], $args = [])
	{

		$this->user = UserModel::getAll();
		$this->renderView('login');

	}

	public function encrypt($hash)
	{
		password_hash($hash, PASSWORD_DEFAULT);
	}
}
