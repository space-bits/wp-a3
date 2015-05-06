<?php
namespace Silverado\model;


abstract class Model {
	/**
	 * Singleton: http://www.phptherightway.com/pages/Design-Patterns.html#singleton
	 */
	protected static function getDb() {
        static $db = null;

		if ($db === null) {
			try {
				$db = new \PDO('sqlite:db/cinema.sqlite3');
			} catch(\PDOException $e) {
				die('An error occured while trying to connect to the database.');
			}
		}
		return $db;
	}

	/**
	 * Return the attribute $name or null if it doesn't exist
	 */
	public function __get($name) {
		if (property_exists($this, $name))
			return $this->$name;

		return null;
	}

	/**
	 * Verify if the attribute $name exists. If so, then verifies for a proper validator
	 * to run against the supplied $value. If no validator is found then it's assumed that
	 * there's no need to validate the supplied $value and therefore it is assigned to the
	 * attribute $name
	 */
	public function __set($name, $value) {
		if (property_exists($this, $name)) {
			$validateMethod = 'validate' . ucfirst($name);
			if (!method_exists($this, $validateMethod) ||
				 method_exists($this, $validateMethod) && $this->$validateMethod($value)) {
				$this->$name = $value;
			}
		}
	}

	/**
	 * Try to match all Column $name and $values present in a $row with internal attributes
	 */
	protected function setByResultRow($row) {
		foreach ($row as $name => $value) {
			$this->__set($name, $value);
		}
	}

	/**
	 * Get all instances of the calling Class
	 */
	public static function getAll() {
		$db = Model::getDb();

		$class = get_called_class();
		$table = strtolower((new \ReflectionClass($class))->getShortName());

		$objects = [];

		foreach ($db->query('SELECT * FROM ' . $table) as $row) {
			$cl = new $class();
			$object = new $class;
			$object->setByResultRow($row);
			$objects[] = $object;
		}
		return $objects;
	}

	/**
	 * Get a instance of the calling Class with the given $id
	 */
	public static function getById($id) {
		$db = Model::getDb();

		$class = get_called_class();
		$table = strtolower((new \ReflectionClass($class))->getShortName());

		$stmt = $db->prepare('SELECT * FROM ' . $table . ' WHERE id=?');

		if ($stmt->execute(array($id))) {
			$row = $stmt->fetch();
			$object = new Movie();
			$object->setByResultRow($row);

			return $object;
		}
		return null;
	}

}