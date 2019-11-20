<?php 

class Admin_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function userList()
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select id, first_name, last_name, email, password, nickname, role from users';
			$res = $db->query($query);
			// $result = $res->fetch_assoc();
			return $res; 
		}
	}
	public function listSingleUser($id)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select id, first_name, last_name, email, password, nickname, role from users where id = "'.$id.'"';
			// var_dump($id);die;	
			$res = $db->query($query);
			$result = $res->fetch_assoc();
			return $result; 
		}
	}
	public function editSaveUser($id ,$first_name, $last_name, $email, $password, $nickname, $role)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$first_name = mysqli_real_escape_string($db, $first_name);
			$last_name = mysqli_real_escape_string($db, $last_name);
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);
			$nickname = mysqli_real_escape_string($db, $nickname);
			$role = mysqli_real_escape_string($db, $role);

			$salt = substr(hash('md5', time()), 0, 8);
			$crypted_pass = hash('md5', $salt.$password);

			$query = 'update users set first_name = "'.$first_name.'", last_name = "'.$last_name.'", email = "'.$email.'", password = "'.$crypted_pass.'", salt = "'.$salt.'", nickname = "'.$nickname.'", role = "'.$role.'" where id = "'.$id.'"';
			$res = $db->query($query);
			// var_dump($res);
			return $res;
		}
	}

	public function create($first_name, $last_name, $email, $password, $nickname, $role)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$first_name = mysqli_real_escape_string($db, $first_name);
			$last_name = mysqli_real_escape_string($db, $last_name);
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);
			$nickname = mysqli_real_escape_string($db, $nickname);
			$role = mysqli_real_escape_string($db, $role);

			$salt = substr(hash('md5', time()), 0, 8);
			$crypted_pass = hash('md5', $salt.$password);
			$profile_created = date('d.M.Y');
			
			$query = 'insert into users values(null, "'.$first_name.'", "'.$last_name.'", "'.$email.'", "'.$crypted_pass.'", "'.$salt.'", "'.$nickname.'", "'.$role.'", "'.$profile_created.'", 0)';
			// var_dump($query); die;

			$res = $db->query($query);
			// var_dump($res);
			return $res;
		}
	}
	public function delete($id)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'delete from users where id = "'.$id.'"';
			$res = $db->query($query);
			// var_dump($res);die;
		}
	}
}