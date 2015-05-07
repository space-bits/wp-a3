<?php

// Set php to show debug messages. Turn this off in production environment
$debug = true;
if ($debug) {
	ini_set('display_errors', 1);
	ini_set('error_prepend_string', '<div class="error">');
	ini_set('error_append_string', '</div>');
	error_reporting(~0);
}

// Configure class autoloading based on the class namespace
spl_autoload_register(function($class) {
    include_once(str_replace('\\', '/', strtolower($class)) . ".php");
});