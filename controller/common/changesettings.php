<?php
session_start();
require_once("../../model/UserModel.php");

if(isset($_POST))
{
	
				$id = $_SESSION['user']['userID'];
				$firstname = $_POST['firstname'];	
				$lastname = $_POST['lastname'];	
				$email = 	$_POST['email'];
				$password = 	hash('sha256',$_POST['password']);	
				$action = new UserModel();

				if($id AND $firstname AND $lastname AND$email AND $password != '')
				{
					echo $result = $action->changeSettings($id,$firstname,$lastname,$email,$password);
					if($result)
					{
						header('location:/backend/settings/msg/gelukt!');	
					}else{
						header('location:/backend/settings/msg/Er is iest fout gegaan.');	
					}
				}

				
			
			

			
	
}else{
	header('location:/backend/settings');	
}



?>