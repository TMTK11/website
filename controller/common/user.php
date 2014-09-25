<?
session_start();
require_once("database.php");

class user{
	public $db;

 	public function __construct()
 	{
 		$this->db = new database();
 	}+

	public function userLogin($username,$password)
 	{
 		
 		$userCheck = $this->db->select("SELECT * FROM `meog2_personeel` WHERE voornaam='$username'AND achternaam='$password'");
 		if($userCheck == false)
 		{
 			return false;
 		}
 		else
 		{
 			foreach($userCheck as $usr){ $userID = $usr[id]; }
 			return $userID;
 			
 		}
 		
 	}



}
$usr = new user();

?>