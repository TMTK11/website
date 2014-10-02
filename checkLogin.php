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

				}
				else
				{
					echo "false";
				}

			}
			catch (PDOException $e)
			{

			}
}else{

}



?>