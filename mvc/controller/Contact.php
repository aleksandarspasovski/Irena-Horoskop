<?php

class Contact extends BaseController
{
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('contact/css/main.css');
	}
	public function index()
	{
		// echo 'inside main index';
		$this->view->render('contact/index');
	}
}