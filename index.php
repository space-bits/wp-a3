<?php
require_once('init.php');
require_once('Config/Routes.php');

use Silverado\Controllers\FrontController;
use Silverado\Utils\Logger;

$uri = getValidatedUri();
$route = $router->getRouteByUri($uri);

if ($route) {
	$route->callController($uri);
} else {
	echo '404';
}