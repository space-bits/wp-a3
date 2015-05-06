<?php

$debug = 1;
if ($debug) {
	ini_set('display_errors', 1);
	ini_set('error_prepend_string', '<div class="error">');
	ini_set('error_append_string', '</div>');
	error_reporting(~0);
}

require('model/movie.php');

use Silverado\model\Movie as Movie;

$movie = Movie::getById(2);

print_r($movie);