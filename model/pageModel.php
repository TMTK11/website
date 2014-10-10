<?php

require_once(DS . 'model' . DS . 'common' . DS . 'miesConnection.php');

class PageModel extends MiesConnection{

	function __construct(){

		parent::__construct();
	}
	
	/*
		Insert new page
	*/
	public function createPage($pageName, $type){
		
		$query = "INSERT INTO pages (`title`, `type`)VALUES('$pageName', '$type')";
		$result = parent::query($query);

		return($result);
	}

	/*
		Update page
	*/
	public function updatePage($pageID, $variables){
		
		if(empty($variables) || !is_array($variables)){
			
			trigger_error("variables must be in array (field, value)", E_WARNING);
			return(false);
		}
		
		foreach ($variables as $key => $value)
			$values[] = "`" . $key . "`='" . $value . "'";

		$query = "UPDATE pages SET " . implode(", ", $values) . " WHERE 1;";
		
		try{
		
			$result = PDO::prepare($query);
			$result = $result->execute();
		}catch (Exception $e) {
		
			trigger_error("Variables where wrong. Update query not excecuted properly.", E_WARNING);
			return(false);
		}

		return($result);
	}

	/*
		Controllers
	*/
	public function getActiveControllers(){

		$query = "SELECT DISTINCT type FROM pages WHERE active = true";
		$result = parent::query($query);

		foreach($result as $type)
			$types[] = $type['type']; //Remove labels from array for easy in_array.

		return($types);
	}

	public function getControllers(){

		$query = "SELECT DISTINCT type FROM pages";
		$result = parent::query($query);

		foreach($result as $type)
			$types[] = $type['type']; //Remove labels from array for easy in_array.

		return($types);
	}

	/*
		Pages
	*/
	public function getPages(){

		$query = "SELECT * FROM pages";
		$result = parent::query($query);

		return($result);
	}

	public function getActivePages(){

		$query = "SELECT * FROM pages WHERE active = true";
		$result = parent::query($query);

		return($result);
	}
}