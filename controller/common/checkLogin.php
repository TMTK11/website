<?php
session_start();
require_once("../../model/UserModel.php");

if(isset($_POST))
{
	
$check = new UserModel();

	

				$userId = $check->checkUser($_POST['username'],sha1($_POST['password']));
			
				if($userId != false)
				{
					$_SESSION['user'] = $userId;
					header('location:/backend');

				}
				else
				{
				
					header('location:/home/msg/verkeerd');
				}

			
	
}else{

}



?>