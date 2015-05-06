<?php
namespace silverado\models;

abstract class Model {

	protected $id;
	protected  $active;

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
		if (property_exists($this, $name)) {
			if (property_exists($this, $name . 'Id') && !$this->$name) {
				$this->lazyLoad($name);
			}
			return $this->$name;
		}

		return null;
	}

	protected function lazyLoad($name) {
		$class = (new \ReflectionClass($this))->getNamespaceName() . '\\' . ucfirst($name);
		$this->$name = $class::getById($this->{$name . 'Id'});
	}

	/**
	 * Verify if the attribute $name exists. If so, then verifies for a proper validator
	 * to run against the supplied $value. If no validator is found then it's assumed that
	 * there's no need to validate the supplied $value and therefore it is assigned to the
	 * attribute $name
	 */
	public function __set($name, $value) {
		if (property_exists($this, $name) && $name != 'id') {
			$validateMethod = 'validate' . ucfirst($name);
			if (!method_exists($this, $validateMethod) ||
				 method_exists($this, $validateMethod) && $this->$validateMethod($value)) {
				$this->$name = $value;
			}
		}
	}

	public function __construct($nameValue = []) {
		$this->setByNameValue($nameValue);
	}

	/**
	 * Try to match all Column $name and $values present in a $nameValue with internal attributes
	 */
	protected function setByNameValue($nameValue) {
		foreach ($nameValue as $name => $value) {
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
			$object = new $class($row);
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
			$object = new $class($row);

			return $object;
		}
		return null;
	}

	private function getTableColumns($table) {
		$db = Model::getDb();

		$result = $db->query("PRAGMA table_info(" . $table . ")");
		$result->setFetchMode(\PDO::FETCH_ASSOC);
		$columns = array();
		foreach ($result as $row) {
			$columns[] = $row;
		}
		return $columns;
	}

	public function save() {
		$db = Model::getDb();

		$class = get_called_class();
		$table = strtolower((new \ReflectionClass($class))->getShortName());

		$columns = $this->getTableColumns($table);

		$fields = [];
		$placeHolders = [];
		$values = [];
		foreach ($columns as $column) {
			$fields[$column['name']] = $column['name'];
			$placeHolders[$column['name']] = ':' . $column['name'];
			$values[$column['name']] = $this->$column['name'];
		}
		$query = 'INSERT OR REPLACE INTO ' . $table . '(' . implode(', ', $fields) . ') VALUES ('. implode(', ', $placeHolders) . ')';
		$stmt = $db->prepare($query);
		foreach ($fields as $field) {
			$stmt->bindParam($placeHolders[$field], $values[$field]);
		}
		$res = $stmt->execute();
		$this->id = $db->lastInsertId();
		return $this->id;
	}

}