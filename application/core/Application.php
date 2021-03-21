<?php
class Application
{
	private $controller = CONTROLLER;
	private $method     = METHOD;
	private $params     = PARAMS;
	
	public function __construct($run)
	{
		if ($run == true)
		{
			$this->process_url();
		}
	}
	private function process_url()
	{
		if ($_SERVER['REQUEST_URI'] && $_SERVER['REDIRECT_URL'])
		{
			$url = htmlspecialchars(strip_tags(urldecode(trim($_SERVER['REQUEST_URI'],'/'))));
			$url = explode('/',strtoupper($url[0]) . substr($url,true));
		}
		if (file_exists('application/controllers/' . $url[0] . '.php'))
		{
			$this->controller = $url[0];
			unset($url[0]);
		}
		require_once 'application/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;
		if (method_exists($this->controller,$url[1]))
		{
			$this->method = $url[1];
			unset($url[1]);
		}
		if (! empty($url))
		{
			$this->params = array_values($url);
		}
		call_user_func_array([$this->controller,$this->method],$this->params);
	}
};