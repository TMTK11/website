<?php
require_once('/../controller/common/database.php');
class loginModel{

	protected $db;

	public function __construct()
	{
		$this->db = new database();
	}

	public function checkUser($username,$password)
	{
		return ($this->db->checkUserLogin($username,$password));
	}


}

?>