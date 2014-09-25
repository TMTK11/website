<?php

require_once("/controller/layoutController.php");

class accountController{



	public function __construct(){


	}

	public function verifyLogin()
	{


	}

	public function getHTML()
	{
		$message = "<h1>Account</h1>";
	
		$title = "Account";
	
		$details = array("contentLeft"=>$message,"title"=>$title,);
		$layout = new layoutController($details);
	
		return($layout->addLoginView());
	}





}


?>