<?php
class Home extends DXC_Controller
{
	public function index()
	{
		$dat['title'] = 'Home';
		$this->view('home/index',$dat);
	}
}