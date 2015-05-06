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

$screening = Screening::getById(1);

print_r($screening);

$screening->movie;

print_r($screening);

$screening->price;

print_r($screening);


