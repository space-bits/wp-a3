<?php
namespace Silverado\Controllers;

class FrontController {
	public function __construct($uri) {
		$args = explode('/', $uri);
		print_r($args);
		$controllerName = array_shift($args);

		if ($controllerName) {
			$controllerClass = (new \ReflectionClass($this))->getNamespaceName() . '\\' . $controllerName . 'Controller';
			new $controllerClass($args);
		} else {
			new MainController($args);
		}
	}
}