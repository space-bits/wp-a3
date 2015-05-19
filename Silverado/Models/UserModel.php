<?php
namespace Silverado\Models;

class UserModel extends AbstractModel {

	protected $id;
	protected $name;
	protected $phone;
	protected $email;

	protected $active;

	//Script taken from ScreeningModel.php
	public function userTest() {
		$db = Model::getDb();

		$stmt = $db->exec("INSERT INTO user (name, phone, email) VALUES('John Doe', '555-555-555', 'JD@email.com'");
	}

}
