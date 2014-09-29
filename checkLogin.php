<?php
require_once("/model/loginModel.php");

if(isset($_POST))
{
	

		try{

			$check = new loginModel();

			$data = $check->checkUser($_POST['username'],$_POST['password']);
			print_r($data);

		}catch (PDOException $e)
		{

		}
}else{

}



?>