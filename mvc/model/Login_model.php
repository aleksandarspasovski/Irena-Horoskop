<?php 

class Login_model extends Model
{
	public $db = null;
	public function __construct()
	{
		parent::__construct();
	}
	/*Function where is logic method for login user*/
	public function login($email, $password)
	{
	   /*resi problem sa insanciranjem db, i uspostavi konekciju sa bazom!!!!
		* 1. Problem resen sa konekcijom za sada.
		* 2. Pronadji bolje resenje za konekciju
		*/
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);

			$query = 'select id, password, salt, nickname, role from users where email = "'.$email.'"';
			$res = $db->query($query);
			$result = $res->fetch_array();

			// izbrisi sve korisnike iz baze nakon sto zavrsis jos neke stvari.
			if (is_null($result)) {
				$err = 'Pogresni kredencijali';
			} else {
				$pass = $result['password'];
				$crypted = hash('md5', $result['salt'].$password);
				if ($pass != $crypted) {
					return false;
				}
			}
			$id = $result['id'];
			$role = $result['role'];
			$start_time = time();
			$count_rows = $res->num_rows;

			/*loggin user and send to dashboard*/
			if ($count_rows == 1) {
				$query = 'update users set active = 1 where email = "'.$email.'"';
				$res = $db->query($query);
				Session::init();
				$_SESSION['id'] = $id;
				Session::set('time', $start_time);
				Session::set('logged_in', $id);
				Session::set('role', $result['role']);
				if ($count_rows){
					$query = 'insert into users_info values(null, none, none, none, none, "'.$_SESSION['id'].'")';
					// var_dump($query);die;
					$res = $db->query($query);
					return true;
				} else {
					return false;
				}
				header('location: '.URL.'/dashboard');
			} else{
				/*
				*Uradi u js fajlu validaciju input polja na stani klijenta
				*Za sada neka ga ovako da samo vrsi redirekciju
				*/
				header('location: '.URL.' main');
				/*return to login page*/
			}
			return $count_rows;
		}
		
	}
}