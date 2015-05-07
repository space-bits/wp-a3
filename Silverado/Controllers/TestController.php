<?php

namespace Silverado\Controllers;

class TestController {
	public function __construct($args) {
		print_r($args);
	}
}