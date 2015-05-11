<?php
namespace Silverado\Utils;

class Log
{

	const DEBUG = 1;
	const ERROR = 2;


	protected $message;
	protected $logLevel;


	public function __construct($message, $logLevel)
	{

		$this->message = $message;
		$this->logLevel = $logLevel;

	}


	public function __get($name)
	{

		return $this->$name;

	}

}