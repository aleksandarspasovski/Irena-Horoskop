<?php 

class Sanovnik_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function sanovnikStari($search)
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$search = mysqli_real_escape_string($db, $search);

			$query = 'select first_letter, content from sanovnik where first_letter like "%'.$search.'" ';
			// var_dump($query);die;
			$res = $db->query($query);
			$result = $res->fetch_assoc();
			// var_dump($result);die;
		
			return $result;
		}
	}
	public function sanovnikList()
	{
		global $db;
		if (is_null($db)) {
			require 'config/db.php';
			$query = 'select * from sanovnik';
			// var_dump($query);die;
			$res = $db->query($query);
			// $result = $res->fetch_assoc();
			// var_dump($result);die;
			return $res;
		}
	}
}