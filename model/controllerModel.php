<?php

require_once(DS . 'model' . DS . 'common' . DS . 'miesConnection.php');

class ControllerModel extends MiesConnection{

	function __construct(){

		parent::__construct();
	}

	public function getActiveControllers(){

		$query = "SELECT DISTINCT type FROM pages WHERE active = true";
		$result = parent::query($query);

		foreach($result as $type)
			$types[] = $type['type']; //Remove labels from array for easy in_array.

		return($types);
	}
}