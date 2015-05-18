<?php
require_once('init.php');
require_once('Config/Routes.php');

use Silverado\Controllers\FrontController;
use Silverado\Utils\Logger;
use Silverado\Utils\HttpRequest;

$httpRequest = new HttpRequest();

$route = $router->getRoute($httpRequest);

if ($route) {
	$route->callController($httpRequest);
} else {
	echo '404: The requested page could not be retrieved.';
}
