<?php 

class Admin extends BaseController
{	/*This function is going to render always because it is constructor
	* 1.check if is set session logged_in and if is set session admin
	*2.	
	*/
	public function __construct()
	{
		parent::__construct();
		Session::init();
		$logged = Session::get('logged_in', true);
		$role = Session::get('role', true);
		if ($logged == false || $role != 'admin') {
			// Session::destroy(); *ne mora da bude unistena jer automatski unisti sesiju i ponovo moras da se ulogujes*
			require 'controller/Errors.php';
			$controller = new Errors();
			exit;
		}
	}

	public function index()
	{
		$this->view->userList = $this->model->userList();
		$this->view->render('admin/index');
	}

	public function create()
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nickname = $_POST['nickname'];
		$role = $_POST['role'];
		// var_dump($role);die;

		$create = new Admin_model();
		if ($create->create($first_name, $last_name, $email, $password, $nickname, $role)) {
			header('location: '.URL.'admin');
		} else{
			header('location: '.$_SERVER['HTTP_REFERER'].'?=something gone wrong,try again ');
		}
	}

	public function edit($id)
	{
		$this->view->admin = $this->model->listSingleUser($id);
		$this->view->render('admin/edit');

	}
	public function editSave($id)
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nickname = $_POST['nickname'];
		$role = $_POST['role'];
		// var_dump($id);die;
		// var_dump($password);
		// var_dump($nickname);die;

		$edituser = new Admin_model();
		if ($edituser->editSaveUser($id, $first_name, $last_name, $email, $password, $nickname, $role)) {
			header('location: '.URL.'admin');
		} else{
			header('location: '.$_SERVER['HTTP_REFERER'].'?=something gone wrong,try again ');
		}
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location: '.URL.'admin');
	}

}