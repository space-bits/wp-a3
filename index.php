<?php

$debug = true;
if ($debug) {
	ini_set('display_errors', 1);
	ini_set('error_prepend_string', '<div class="error">');
	ini_set('error_append_string', '</div>');
	error_reporting(~0);
}

// Configure class autoloading based on the class namespace
spl_autoload_register(function($class) {
    include_once(str_replace('\\', '/', strtolower($class)) . ".php");
});

use silverado\models\Movie;
use silverado\models\Screening;

$screening = new Screening();

$screening->day = 'day';
$screening->time = 'time';
$screening->movieId = 200;
$screening->priceId = 100;

$screening->save();

print_r($screening);

$screening->day = 'day2';
$screening->time = 'time2';
$screening->movieId = 300;
$screening->priceId = 200;

$screening->save();

print_r($screening);
