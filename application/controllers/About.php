<?php
class About extends DXC_Controller
{
	public function index()
	{
		$dat['title'] = 'About';
		$this->view('about/index',$dat);
	}
}