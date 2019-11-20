<?php 


class Register_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function registerUser($first_name, $last_name, $email, $password, $nickname)
	{
		global $db;
		if (!is_null($db)) {
			require 'config/db.php';
			$first_name = mysqli_real_escape_string($db, $first_name);
			$last_name = mysqli_real_escape_string($db, $last_name);
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);
			$nickname = mysqli_real_escape_string($db, $nickname);

			$salt = substr(hash('md5', time()), 0, 8);
			$crypted_pass = hash('md5', $salt.$password);
			$profile_cr = date('d.M.Y');

			$query = 'insert into users values(null, "'.$first_name.'", "'.$last_name.'", "'.$email.'", "'.$crypted_pass.'", "'.$salt.'", "'.$nickname.'", default, "'.$profile_cr.'", 0)';

			$res = $db->query($query);
			return $res;
		}
	}
	public function checkIfAvailable($email)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select email from users where email = "'.$email.'"';
			$res = $db->query($query);
			return $res->num_rows == 0; 
		}
	}

}