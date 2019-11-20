<?php 

class Dashboard extends BaseController
{	
	function __construct()
	{
		parent::__construct();
		Session::init();
		$logged = Session::get('logged_in', true);
		if ($logged == false) {
			Session::destroy();
			require 'controller/Errors.php';
			$controller = new Errors();
			exit;
		}
		// print_r($_SESSION);
		$this->view->css = array('dashboard/css/main.css');
		$this->view->js = array('dashboard/js/main.js');
	}

	public function index()
	{
		$this->view->status = $this->model->status();
		$this->view->render('dashboard/index');
	}
	public function insertComment()
	{
		$text = trim($_POST['text']);
		$text = strlen($text);
		if ($text >= 1000) {
			header('location: ' . $_SERVER['HTTP_REFERER'] . '?content is too large');
			exit;
		}
		if ($text == '') {
			header('location: ' . $_SERVER['HTTP_REFERER'] . '?missing content');
			exit;
		}
		$this->model->comments($text);
	}
	public function deleteComment($row_id)
	{
		// var_dump($row_id);die;
		$this->model->deleteSingleComment($row_id);
		header('location: '.URL.'dashboard?succ=Uspesno ste obrisali komentar');
	}
	public function logout()
	{

		$this->model->logoutSingleUsers();
		Session::destroy();
		header('location: '.URL.'main');
		exit;
	}

}