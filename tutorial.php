<?php
// Set Debug option and autoloader function (Don't remove)
require_once('init.php');
//=============================

// Some model usage examples

// We're using namespaces here so tell php
// where is the classes that you are trying to use.
// Don't wory about requires and includes because
// we have an autoloader set, so as long as your
// namespaces meet the actual path in your filesystem
// the autoloader will handle it properly.
use Silverado\Models\MovieModel;
use Silverado\Models\ScreeningModel;
use Silverado\Models\PriceModel;

echo '<pre>';
echo 'Creating a new Movie: ';
$movie = new MovieModel();

echo 'Set it\'s attributes manually: ';
$movie->name = 'The Godfather';
$movie->ageGuidanceRating = 'PG';
$movie->duration = 137;
$movie->genre = 'Drama';
$movie->film = '';
$movie->imgPath = '';
$movie->description = '';
$movie->storyline = '';

echo 'Show the actual object: ';
print_r($movie);

echo 'Save it to the database: ';
$movie->save();

echo 'Show the object again. Note now the presence of the id field: ';
print_r($movie);

echo 'If you have to update a field, just change it and save again: ';
$movie->duration = 145;
$movie->save();
print_r($movie);

echo 'Another way of creating an object is passing an array to the class constructor: ';
$priceAttrs = [
	'description' => 'Great Promotion',
	'sa' => 10,
	'sp' => 10,
	'sc' => 10,
	'fa' => 20,
	'fc' => 20,
	'b1' => 15,
	'b2' => 15,
	'b3' => 15
];
$price = new PriceModel($priceAttrs);
$price->save();
print_r($price);

echo 'Ok, now let\'s create some associations: ';
$screening = new ScreeningModel();
$screening->day = 'Wednesday';
$screening->time = '18:30';
print_r($screening);

echo 'Now after the associations: ';
$screening->movie = $movie;
$screening->price = $price;
print_r($screening);

echo 'To get a list of all prices: ';
$prices = PriceModel::getAll();
print_r($prices);

echo 'To get a specific screening id: ';
$screening2 = ScreeningModel::getById(1);
print_r($screening2);

echo 'Note that as we\'re using lazy-loading attributes, the $movie and the $price are not populated yet: ';
$screening2->movie; // Just accessing it but not using or assigning at all
print_r($screening2);
echo 'Now the movie attribute is populated because we did access it.';





echo '</pre>';