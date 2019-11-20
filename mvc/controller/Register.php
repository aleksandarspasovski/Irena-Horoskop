<?php

class Register extends BaseController
{
	function __construct()
	{
		parent::__construct();
		Session::init();
		$logged = Session::get('logged_in', true);
		if ($logged != false) {
			// Session::destroy(); *ne mora da bude unistena jer automatski unisti sesiju i ponovo moras da se ulogujes*
			require 'controller/Errors.php';
			$controller = new Errors();
			exit;
		}
		$this->view->css = array('register/css/main.css');
	}

	public function index()
	{
		$this->view->render('register/index');
	}

	public function createUser()
	{
		switch ($_REQUEST['fnr']) {
			case 'register':

			$err = array();

			if (
				!isset($_POST['first_name']) && !empty($_POST['first_name']) ||
				!isset($_POST['last_name']) && !empty($_POST['last_name']) ||
				!isset($_POST['email']) && !empty($_POST['email']) ||
				!isset($_POST['password']) && !empty($_POST['password']) ||
				!isset($_POST['re_password']) && !empty($_POST['re_password']) ||
				!isset($_POST['nickname']) && !empty($_POST['nickname'])
			) {
				$err[] = 'Missing fields';
			}

			$first_name = trim($_POST['first_name']);
			$last_name = trim($_POST['last_name']);
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			$re_password = trim($_POST['re_password']);
			$nickname = trim($_POST['nickname']);

			// var_dump($first_name);
			if ($first_name === '') {
				$err[] = 'Missing First name';
			}
			if ($last_name === '') {
				$err[] = 'Missing Last name';
			}
			if ($email === '') {
				$err[] = 'Missing Email';
			}
			if ($password === '') {
				$err[] = 'Missing Password';
			}
			if ($re_password === '') {
				$err[] = 'Missing Re-Password';
			}

			if ($password != $re_password) {
				$err[] = 'Password did not match';
			}
			if ($nickname === '') {
				$err[] = 'Missing Nickname';
			}

			if (count($err) > 0) {
				if (count($err) > 1){
					$errors = '&err[]=' . $err[0];
				} else {
					$errors = implode('&err[]=', $err);
					// $err = str_replace(' ', '+', $err);
				}
				$errors = '?' . substr($errors, 1);
				header('Location: ' . $_SERVER['HTTP_REFERER'] . $errors);
				exit;
			}

			$create_user = new Register_model();
			if ($create_user->checkIfAvailable($email)) {
				$created = $create_user->registerUser($first_name, $last_name, $email, $password, $nickname);
				if ($created) {
					header('Location: ' . $_SERVER['HTTP_REFERER'] . '?succ=Uspesno ste se registrovali.');
				}
			 } else{
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err=Korisnik sa unetim kredencijalima vec postoji.');
			}
		break;

		default:
		break;
		}
	}
}