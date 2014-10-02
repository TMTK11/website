<?php
session_start();
require_once("/model/loginModel.php");

if(isset($_POST))
{
	
$check = new loginModel();

		try{

				$userId = $check->checkUser($_POST['username'],sha1($_POST['password']));
			
				if($userId != false)
				{
					$_SESSION['user'] = $userId;
					header('location:/backend');

				}
				else
				{
				
					header('location:/account/?msg=Verkeerd');
				}

			}
			catch (PDOException $e)
			{

			}
}else{

}



?>