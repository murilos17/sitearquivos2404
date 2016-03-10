<?php 

namespace App\Core;

class App
{
	protected $controller = 'Index';
	protected $action;
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();
		$controller = ucfirst($url[0]);

		$className = 'App\\Controller\\' . $controller;

		if (class_exists($className)) {
			$this->controller = $url[0];
			unset($url[0]);
		}

		$class = 'App\\Controller\\' . $this->controller;
		$this->controller = new $class();

		if (isset($url[1])) {
			$url[1] = $url[1] . 'Action';
			if (method_exists($this->controller, $url[1])) {
				$this->action = $url[1];
				unset($url[1]);
			}
			$this->params = array_values($url);

			call_user_func_array([$this->controller, $this->action], $this->params);
		}
	}

	public function parseUrl()
	{
		$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$urlArray = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

		unset($urlArray[0]);

		return array_values($urlArray);
	}
}
