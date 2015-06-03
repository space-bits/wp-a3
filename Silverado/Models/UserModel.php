<?php
namespace Silverado\Models;

class UserModel extends AbstractModel {

	protected $username;
	protected $password;
	protected $firstname;
	protected $lastname;
	protected $phone;
	protected $email;
	protected $voucher;



	// TODO: URGENT! Add cryptography on the password.
	// TODO: URGENT! Add sql real escape string to all input fields

	public static function validateLogin($username, $password)
	{

		$db = self::getDb();

		$stmt = $db->prepare('SELECT * FROM user WHERE username=?');
		if ($stmt->execute(array($username))) {
			$row = $stmt->fetch();

			if ($row && password_verify($password, $row['password'])) {
				return new UserModel($row);
			}
		}
		return null;

	}


}
