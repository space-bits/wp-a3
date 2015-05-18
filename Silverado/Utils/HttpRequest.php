<?php
namespace Silverado\Utils;


class HttpRequest
{

    protected $method;
    protected $uri;
    protected $vars;

    public function __get($name)
    {

        return $this->$name;

    }

    public function __construct()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->method = 'POST';
            $this->uri = $this->getValidatedUri();
            $this->vars = &$_POST;
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->method = 'GET';
            $this->uri = $this->getValidatedUri();
            $this->vars = &$_GET;
        }

    }


    protected function getValidatedUri()
    {

    	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    	return preg_replace("/^(\/[[:alnum:]]+.php)?\/(.*)$/", "/$2", $uri);

    }

}
