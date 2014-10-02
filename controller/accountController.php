<?php

require_once("/controller/layoutController.php");

class accountController{



	public function getHTML()
	{
		$accountContent = "<h1>Account</h1>";
		$accountContent .= "
		<form name='login' method='POST' action='/checkLogin.php'>
		<input type='text' name='username' placeholder='E-mail'/>
		<input type='password' name='password' placeholder='Password'/>
		<input type='submit' name='checklogin' value='Login'/>
		</form>
		";
		$title = "Account";
	
		$details = array("contentLeft"=>$accountContent,"title"=>$title);
		$layout = new layoutController($details);

		return($layout->getHTML());
	}





}


?>