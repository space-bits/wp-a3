<?php
namespace Silverado\Models;

class UserModel extends AbstractModel {

	protected $username;
	protected $password;
	protected $firstname;
	protected $lastname;
	protected $phone;
	protected $email;


	// TODO: URGENT! Add cryptography on the password.
	public static function validateLogin($username, $password)
	{

		$db = self::getDb();

		$stmt = $db->prepare('SELECT * FROM user WHERE username=? AND password=?');
		if ($stmt->execute(array($username, $password))) {
			return new UserModel($stmt->fetch());
		}
		return null;

	}


}
