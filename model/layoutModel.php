<?php

require_once(DS . 'model' . DS . 'common' . DS . 'miesConnection.php');

class LayoutModel extends MiesConnection{

	function __construct(){

		parent::__construct();
	}

	public function getMenuOptions(){

		$query = "SELECT * FROM `pages` WHERE active = true ORDER BY `order`, `id`";
		$result = parent::query($query);

		foreach($result as $pageLink)
			if($_SESSION['user']['userRole'] == 'Admin' || !$pageLink['admin']) //If session is Admin OR the page is not admin only, make link 
				$menuOptions[$pageLink['title']] = '/' . $pageLink['type'] . '/'; //Array key is display title, value is link
		
		return($menuOptions);
	}
}