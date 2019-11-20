<?php 

class About_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function aboutSign()
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select id, icon, sign, length, about_sign from signs';
			// var_dump($id);die;	
			$res = $db->query($query);
			// $result = $res->fetch_assoc();
			return $res; 
		}
	}
}