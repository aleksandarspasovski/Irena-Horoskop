<?php 

class Database
{
	function __construct() {

        // parent::__construct();
        $this->db = new mysqli('127.0.0.1', 'root', 'homosapiens1', 'as_project');
        // $this->db = new Db();
        // echo ' <br>prepare iz database <br>';
    }
}