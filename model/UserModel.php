<?php
require_once('/../controller/common/database.php');
class UserModel{

	private $db;

	public function __construct()
	{
		$this->db = new database();
	}

	public function checkUser($username,$password)
	{
		return ($this->db->checkUserLogin($username,$password));
	}

	public function changeSettings($id,$firstname,$lastname,$email,$password)
	{
		return ($this->db->changeSettings($id,$firstname,$lastname,$email,$password));
	}

	public function BlogPost($title,$message){

		return($this->db->addPost($title,$message));

	}
	public function getPost(){

		return($this->db->getPost());

	}
	


}

?>