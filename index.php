<?php
require_once('init.php');

use Silverado\Controllers\FrontController;

try {
	$uri = getValidatedUri();
	new FrontController($uri);
} catch(\Exception $e) {
	echo '404';
}