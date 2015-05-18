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

define('SILVERADO_DIR', dirname(__FILE__));

function getBaseUri()
{
	$uri = 'http';
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
		$uri .= 's';
	$uri .= '://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';

	return $uri;
}

function getAssetUri($asset)
{
	return getBaseUri() . $asset;
}
