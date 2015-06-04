<?php

use Silverado\Utils\Router;
use Silverado\Utils\Route;

$router = new Router([
	new Route('GET', '^/$', 'Silverado\Controllers\MainController', 'index'),
	new Route('GET', '^/movie/?$', 'Silverado\Controllers\MovieController', 'movie'),
	new Route('GET', '^/book/(\d+)/?$', 'Silverado\Controllers\BookController', 'book'),
	new Route('GET', '^/contact/?$', 'Silverado\Controllers\ContactController', 'contact'),
	new Route('POST', '^/checkout/?$', 'Silverado\Controllers\CheckoutController', 'checkout'),
	new Route('GET', '^/login/?$', 'Silverado\Controllers\LoginController', 'displayForm'),
	new Route('POST', '^/login/?$', 'Silverado\Controllers\LoginController', 'validateLogin'),
	new Route('GET', '^/logout/?$', 'Silverado\Controllers\LoginController', 'logout'),
	new Route('GET', '^/register/?$', 'Silverado\Controllers\RegisterController', 'displayForm'),
	new Route('POST', '^/register/?$', 'Silverado\Controllers\RegisterController', 'validateRegistration'),
	new Route('GET', '^/cart/?$', 'Silverado\Controllers\CartController', 'displayCart'),
	new Route('GET', '^/cart/(\d+)/delete?$', 'Silverado\Controllers\CartController', 'deleteBooking')

]);
