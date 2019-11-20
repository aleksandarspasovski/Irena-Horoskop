<?php 

class About extends BaseController
{
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('about/css/main.css');
	}
	public function index()
	{
		$this->view->about = $this->model->aboutSign();
		$this->view->render('about/index');
	}
}