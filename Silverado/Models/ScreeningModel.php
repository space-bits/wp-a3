<?php
namespace Silverado\Models;

class ScreeningModel extends AbstractModel {

	protected $day;
	protected $time;
	protected $movieId;
	protected $priceId;

	// Not present in the database but present here for lazyloading the objects
	protected $movie;
	protected $price;

	public function test() {
		$db = Model::getDb();

		$stmt = $db->exec("INSERT INTO screening (day, time, movieId, priceId) VALUES('day', 'time', 100, 100)");
	}

}