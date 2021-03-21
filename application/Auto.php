<?php
class Auto
{
	public static function load($dir)
	{
		$config = scandir('application/' . $dir . '/');
		unset($config[0]);
		unset($config[1]);
		$config = array_values($config);
		for ($i = 0; $i < count($config); $i++)
		{
			require_once $dir . '/' . $config[$i];
		}
	}
}