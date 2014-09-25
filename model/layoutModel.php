<?php

//require_once("/model/common/connection.php");

class LayoutModel{

	function __construct(){
	
	}

	function getMenuOptions(){
		
		$menuOptions = array("Home"=>"/home/", "Maaike's Blog"=>"/blog/maaike/", "contact"=>"/contact/");
		
		return($menuOptions);
	
	}
}


?>