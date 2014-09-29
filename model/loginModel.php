<?php
require_once('/controller/common/database.php');
class loginModel{

	protected $db;

	public function __construct()
	{
		$this->db = new database();
	}

	public function checkUser($username,$password)
	{
		$sql = "SELECT * FROM `username` WHERE email='$username' AND password='$password'";
		return ($this->db->select($sql));

	}


}

?>