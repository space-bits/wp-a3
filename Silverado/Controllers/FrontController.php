<?php
namespace Silverado\Controllers;

class FrontController {
	public function __construct($uri) {
		$args = explode('/', $uri);
		$controllerName = array_shift($args);

		if ($controllerName) {
			$controllerClass = (new \ReflectionClass($this))->getNamespaceName() . '\\' . $controllerName . 'Controller';
			if (class_exists($controllerClass)) {
				new $controllerClass($args);
			} else {
				throw new \Exception("404", 1);
			}
		} else {
			new MainController($args);
		}
	}
}