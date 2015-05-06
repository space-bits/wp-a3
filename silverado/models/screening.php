<?php
namespace silverado\models;

class Screening extends Model {

	protected $id;
	protected $day;
	protected $time;
	protected $movieId;
	protected $priceId;

	// Not present in the database but present here for lazyloading the objects
	protected $movie;
	protected $price;

}