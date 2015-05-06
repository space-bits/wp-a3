<?php
namespace Silverado\model;
require_once('model.php');

class Movie extends Model {

	protected $id;
	protected $name;
	protected $ageGuidanceRating;
	protected $duration;
	protected $genre;
	protected $film;
	protected $imgPath;
	protected $description;
	protected $storyline;


	function __construct() {  }
	function __destruct() {  }

	/**
	 * Sample Validator
	 */
	protected function validateId($id) {
		return true;
	}

	public static function getByScreeningId($screeningId) {
		$db = Model::getDb();

		$stmt = $db->prepare('SELECT m.* FROM movie m, screening s WHERE m.id=s.movieId AND s.id=?');

		if ($stmt->execute(array($screeningId))) {
			$line = $stmt->fetch();
			$movie = new Movie();
			$movie->setByLineResult($line);

			return $movie;
		}

		return null;

	}

}