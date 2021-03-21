<?php
class Help extends DXC_Controller
{
	public function index()
	{
		$dat['title'] = 'Help';
		$this->view('help/index',$dat);
	}
}