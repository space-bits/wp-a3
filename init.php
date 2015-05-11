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
spl_autoload_register(function($className) {
	$class = preg_replace("/^(.*)(Model|Controller|View)$/", "Silverado\\$2s\\$0", $className);
	$file = str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
	if (file_exists($file)) {
    	require_once($file);
	}
});

function getValidatedUri() {
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri = preg_replace("/^(.index.php)?\/(.*)$/", "/$2", $uri);
	return $uri;
}

define('SILVERADO_DIR', dirname(__FILE__));
