<?php 

class Profile extends BaseController
{
	function __construct()
	{
		parent::__construct();
		Session::init();
		$logged = Session::get('logged_in', true);
		if ($logged == false) {
			// Session::destroy(); *ne mora da bude unistena jer automatski unisti sesiju i ponovo moras da se ulogujes*
			require 'controller/Errors.php';
			$controller = new Errors();
			exit;
		}
		$this->view->css = array('profile/css/main.css');
		// var_dump($_SESSION);
	}
	public function index()
	{
		$id = $_SESSION['id'];
		$this->view->profile = $this->model->usersProfile($id);
		$this->view->render('profile/index');
	}
	public function usersProfile($id)
	{
		// var_dump($_POST['gender']);die;
		$err = array();
		if (
				!isset($_POST['first_name']) && empty($_POST['first_name']) ||
				!isset($_POST['last_name']) && empty($_POST['last_name']) ||
				!isset($_POST['password']) && empty($_POST['password']) ||
				!isset($_POST['re_password']) && empty($_POST['re_password']) ||
				!isset($_POST['nickname']) && empty($_POST['nickname'])
			) {
				$err[] = 'Missing fields';
			}

			$first_name = trim($_POST['first_name']);
			$last_name = trim($_POST['last_name']);
			$password = trim($_POST['password']);
			$re_password = trim($_POST['re_password']);
			$nickname = trim($_POST['nickname']);

			// var_dump($first_name);die;
			if ($first_name === '') {
				$err[] = 'Missing First name';
			}
			if ($last_name === '') {
				$err[] = 'Missing Last name';
			}
			if ($password === '') {
				$err[] = 'Missing Change Password';
			}
			if ($re_password === '') {
				$err[] = 'Missing Confirm Password';
			}
			if ($nickname === '') {
				$err[] = 'Missing Nickname';
			}
			if ($password != $re_password) {
				$err[] = 'Passwords did not match';
			}

			if (count($err) > 0) {
				if (count($err) == 1){
					$errors =  $err[0];
				} else {
					$errors = implode('&err[]=', $err);
				}
				$errors = '?&err[]='. substr($errors, 0);
				header('Location: '.URL.'profile/index' . $errors);
				exit;
			}

			$update_user = new Profile_model();
			if ($update_user->checkIfAvailable($nickname)) {
				$updated = $update_user->updateUser($first_name, $last_name, $password, $nickname);
				if ($updated) {
					header('Location: '.URL.'profile/index?succ[]=Uspesno ste updejtovali profil');
				}
			 } else{
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=Nickname je zauzeto probaj drugo');
			}
	}
	public function usersProfileInfo($id)
	{
		$err = array();
		if (
				!isset($_POST['country']) && empty($_POST['country']) ||
				!isset($_POST['city']) && empty($_POST['city']) ||
				!isset($_POST['address']) && empty($_POST['address']) ||
				!isset($_POST['phone_number']) && empty($_POST['phone_number'])
			) {
				$err[] = 'Missing fields';
			}

			$id = $_SESSION['id'];
			$country = trim($_POST['country']);
			$city = trim($_POST['city']);
			$gender = trim($_POST['gender']);
			$address = trim($_POST['address']);
			$phone_number = trim($_POST['phone_number']);

			if ($country === '') {
				$err[] = 'Missing Country';
			}
			if ($city === '') {
				$err[] = 'Missing city';
			}
			if ($address === '') {
				$err[] = 'Missing Address';
			}
			if ($phone_number === '') {
				$err[] = 'Missing Phone Number';
			}

			if (count($err) > 0) {
				if (count($err) == 1){
					$errors =  $err[0];
				} else {
					$errors = implode('&errin[]=', $err);
					// $err = str_replace(' ', '+', $err);
				}
				$errors = '?&errin[]='. substr($errors, 0);
				header('Location: '.URL.'profile/index' . $errors);
				exit;
			}

			$update_user = new Profile_model();
			if ($update_user->updateUserInfo($country, $city, $address, $phone_number, $gender, $id)) {
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?succin[]=Uspesno ste updejtovali profil');

			 } else{
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?errin[]=Doslo je do greske pokusajte ponovo');
			}
	}
	public function deleteAccount($id)
	{
		var_dump($id);

		$this->model->deleteAccount($id);
	}
}