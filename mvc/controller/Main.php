<?php

class Main extends BaseController
{
	function __construct()
	{
		parent::__construct();
		$this->view->js = array('main/js/main.js');
	}
	public function index()
	{
		$this->view->render('main/index');
	} 
	// public function search(){
	// 	// napravi model gde ces na osnovu url koji ces dobiti iz forme da izlistas bazu sa sanovnikom
	// }
	public function chakras()
	{
		$this->view->render('main/chakras');
	}
}