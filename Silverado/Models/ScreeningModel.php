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


}
