<?php

require_once("/controller/layoutController.php");

class accountController{



	public function getHTML()
	{
		$message = "<h1>Account</h1>";
		$login = "
		<form method='POST' action='/checkLogin.php'>
		<input type='text' name='username' placeholder='E-mail'/>
		<input type='password' name='password' placeholder='Password'/>
		<input type='submit' name='checklogin' value='Login'/>
		</form>
		";
		$title = "Account";
	
		$details = array("contentLeft"=>$message,"title"=>$title, "Login" => $login);
		$layout = new layoutController($details);

		return($layout->getHTML());
	}





}


?>