<?php  
// ******USE PDO CLASS********
class Profile_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function usersProfile($id)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select users.first_name, users.last_name, users.email, users.password, users.nickname, users.profile_created, users.active, users_info.country, users_info.city, users_info.address, users_info.phone_number, users_info.gender from users join users_info on users.id = users_info.id where users.id = "'.$id.'"';
			$res = $db->query($query);
			$result = $res->fetch_assoc();

			if (!isset($result['first_name']) && !isset($result['last_name']) && !isset($result['nickname'])) {
				$query = 'select first_name, last_name, email, password, nickname, profile_created, active from users where id = "'.$id.'"';
				$res = $db->query($query);
				$results = $res->fetch_assoc();
				return $results;
			}
			return $result; 
		}
	}
	public function checkIfAvailable($nickname)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select nickname from users where nickname = "'.$nickname.'"';
			$res = $db->query($query);
			$result = $res->num_rows;
			if ($result > 1) {
				return false;
			} else{
				return true;
			}
			return $result;
		}
	}
	public function updateUser($first_name, $last_name, $password, $nickname)
	{
		global $db;
		if (!is_null($db)) {
			require 'config/db.php';
			$first_name = mysqli_real_escape_string($db, $first_name);
			$last_name = mysqli_real_escape_string($db, $last_name);
			$password = mysqli_real_escape_string($db, $password);
			$nickname = mysqli_real_escape_string($db, $nickname);
			var_dump($first_name);
			var_dump($last_name);
			var_dump($password);
			var_dump($nickname);

			$salt = substr(hash('md5', time()), 0, 8);
			$crypted_pass = hash('md5', $salt.$password);

			$query = 'update users set first_name = "'.$first_name.'", last_name = "'.$last_name.'", password = "'.$crypted_pass.'", salt = "'.$salt.'", nickname = "'.$nickname.'" where id = "'.$_SESSION['id'].'"';
			var_dump($query);
			$res = $db->query($query);
			return $res;
		}
	}

	public function updateUserInfo($country, $city, $address, $phone_number, $gender, $id)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$country = mysqli_real_escape_string($db, $country);
			$city = mysqli_real_escape_string($db, $city);
			$address = mysqli_real_escape_string($db, $address);
			$phone_number = mysqli_real_escape_string($db, $phone_number);
			$gender = mysqli_real_escape_string($db, $gender);

			$query = 'insert into users_info values(null, "'.$country.'", "'.$city.'", "'.$address.'", "'.$phone_number.'", "'.$gender.'", "'.$_SESSION['id'].'")';
			$res = $db->query($query);
			return $res;
		}
	}
	public function deleteAccount($id)
	{
		var_dump($id);
		global $db;
		if (is_null($db)) {
			require 'config/db.php';

			$query = 'delete users.*, users_info.* from users, users_info where users.id = "'.$id.'" and users_info.id = "'.$id.'")';
			var_dump($query);
			$res = $db->query($query);
			var_dump($res);die;
			return $res;
		}
	}
}