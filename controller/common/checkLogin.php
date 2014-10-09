<?php
session_start();
require_once("../../model/UserModel.php");

if(isset($_POST))
{
	
$check = new UserModel();

	

				$user = $check->checkUser($_POST['username'],hash('sha256',$_POST['password']));
				$userinfo = array();
				if($user != false)
				{
					$userinfo['userID'] = $user[0];
					$userinfo['userRole'] = $user[1];
					$_SESSION['user'] = $userinfo;
					header('location:/backend');

				}
				else
				{
				
					header('location:/home/msg/verkeerd');
				}

			
	
}else{

}



?>