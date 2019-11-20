<?php 

class Login extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->render('login/index');
	}

	public function users()
	{
		switch ($_REQUEST['fn']) {
			case 'login':

			$err = array();

			if (
				!isset($_POST['email']) ||
				!isset($_POST['password'])
			){
				$err[] = 'Missing fields';
			}

			$email = trim($_POST['email']);
			$password = trim($_POST['password']);

			if ($email == '') {
				$err[] = 'Email is required';
			}
			if ($password == '') {
				$err[] = 'Password is required';
			}

			if (count($err) > 0) {
				if (count($err) == 1){
					$err_str = '&err=' . $err[0];
				} else {
					$err_str = implode('&err=', $err);
					$err_str = str_replace(' ', '+', $err_str);
				}
				$err_str = '?' . substr($err_str, 1);
				header('Location: ' . $_SERVER['HTTP_REFERER'] . $err_str);
			}

			$user = new Login_model();
			if ($user->login($email, $password)) {
				header('Location: '.URL.'dashboard?dobrodosli-na-dashboard-strani');
			} else {
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?nismo uspeli da pronadjemo korisnika sa odgovarajucim identitetom');
			}
		break;

		default:
		break;
		}
	}
}