<?php

require_once(DS . 'model' . DS . 'common' . DS . 'miesConnection.php');

class LayoutModel extends MiesConnection{

	function __construct(){

		parent::__construct();
	}

	public function getAllPages(){

	}

	public function getMenuOptions(){

		$query = "SELECT * FROM pages WHERE active = true";
		$result = parent::query($query);

		foreach($result as $pageLink){

			if($_SESSION['userRole'] == 'admin' || !$pageLink['admin'])
				$menuOptions[$pageLink['title']] = $pageLink['type'];
		}
		/*
		$menuOptions = array("Home"=>"/home/", "Michaels Blog"=>"/blog/michael/", "contact"=>"/contact/");
		
		return($menuOptions);
		*/
		return($menuOptions);
	}
}

?>