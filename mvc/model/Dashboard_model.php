<?php 
class Dashboard_Model extends Model
{	
	function __construct()
	{
		parent::__construct();
	}
	public function status()
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select * from users where active = 1'; 
			$res = $db->query($query);
			$result = $res->num_rows;
			return $result;
		}
	}
	public function comments()
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$content = ucfirst($_POST['text']);
			// $content = strtolower($cont);
			// $forbidden_words = array('Govno');

			$date_cr = date('d.M.Y / H:i:s');
			$query = 'insert into comments values(null, "'.$date_cr.'", "'.$content.'", "'.$_SESSION['id'].'")';
			$res = $db->query($query);
			if ($res) {
				header('location: '.URL.'dashboard');
			}
			return $res;
		}
	}
	public function deleteSingleComment($row_id)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'delete from comments where id = "'.$row_id.'"';
			$res = $db->query($query);			
			return $res;
		}
	}
	public function logoutSingleUsers()
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';

			$query = 'update users set active = 0 where id = "'.$_SESSION['logged_in'].'"';
			$res = $db->query($query);
			return $res;
		}
	}
}