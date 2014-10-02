<?php

require_once("/controller/layoutController.php");

class accountController{



	public function getHTML()
	{
		$accountContent = "<h1>Account</h1>";

		$title = "Account";
	
		$details = array("contentLeft"=>$accountContent,"title"=>$title);
		$layout = new layoutController($details);

		return($layout->getHTML());
	}





}


?>