<?php

use Silverado\Utils\Router;
use Silverado\Utils\Route;

$router = new Router([
	new Route('GET', '^/$', 'Silverado\Controllers\MainController', 'index'),
	new Route('GET', '^/movie/?$', 'Silverado\Controllers\MovieController', 'movie'),
	new Route('GET', '^/book/(\d+)/?$', 'Silverado\Controllers\BookController', 'book'),
	new Route('GET', '^/contact/?$', 'Silverado\Controllers\ContactController', 'contact'),
	new Route('POST', '^/checkout/?$', 'Silverado\Controllers\CheckoutController', 'checkout')
]);
