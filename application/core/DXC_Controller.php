<?php
class DXC_Controller
{
	protected function view($view,$dat = [])
	{
		require_once 'application/views/' . $view . '.php';
	}
	protected function model($model)
	{
		$model .= '_model';
		require_once 'application/models/' . $model . '.php';
		return new $model;
	}
	protected function helper($helper)
	{
		$helper .= '_helper';
		require_once 'application/helpers/' . $helper . '.php';
		return new $helper;
	}
}