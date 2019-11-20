<?php 

class Sanovnik extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('sanovnik/css/main.css');
	}
	public function index()
	{
		$this->view->sanovniklist = $this->model->sanovnikList();
		$this->view->render('sanovnik/index');
	}
	public function search()
	{
		if (isset($_POST['search'])) {
			// var_dump($_POST['search']);die;
			$search = trim($_POST['search']);
			// var_dump($search);die;

			// $this->view->sanovnik = $this->model->sanovnikStari($search);
			// $this->view->render('sanovnik/index');
			$san = new Sanovnik_model();
			if ($san->sanovnikStari($search)) {
				
				// var_dump($search);die;
				header('location: '.URL.'sanovnik/index?search#'.$search.'');
			} else{
				$search = str_replace(' ', '-', $search);
				header('location: ' . $_SERVER['HTTP_REFERER'] . '?the word='.$search.' you entered does not exist!');
			}
		}
		
		$this->view->sanovnik = $this->model->sanovnikStari($search);
	}
}