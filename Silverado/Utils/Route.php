<?php
namespace Silverado\Utils;

class Route
{

	protected $method;
	protected $path;
	protected $controller;
	protected $action;
	protected $args;


	public function __construct($method, $path, $controller, $action = null, $args = [])
	{

		$this->method = $method;
		$this->path = $path;
		$this->controller = $controller;
		$this->action = $action;
		$this->args = $args;

	}


	public function __get($name)
	{

		return $this->$name;

	}


	public function __toString()
	{

		return $this->method . ' ' . $this->path . ': ' . $this->controller . '->' . $this->action;

	}

	public function validateUri($uri)
	{

		$regex = '@' . $this->path . '@';
		$valid = preg_match($regex, $uri, $this->args);

		return $valid;

	}

	public function callController()
	{


		if ($this->action != null){
			$controller = new $this->controller();
			$controller->{$this->action}($this->args);
		} else {
			$controller = new $this->controller($this->args);
		}

	}


}

