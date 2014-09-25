<?php

//require_once("/model/common/connection.php");

class LayoutModel{

	function __construct(){
	
	}

	function getMenuOptions(){
		
		$menuOptions = array("Home"=>"/home/", "Michaels Blog"=>"/blog/michael/", "contact"=>"/contact/");
		
		return($menuOptions);
	
	}
}


?>