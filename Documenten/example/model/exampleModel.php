<?php

//You can and should use the connectiondetails in the connection.php file
require_once("/model/common/database.php");

/*
Your classname should be your pluginname + Model
Interaction with this class can be however you please but it's recommended to follow this patern.
*/
class ExampleModel{

	private	$databaseObject;
	private	$userData;
	
	/*
	Data required in all cases should be requested in the constructor
	Don't request rarely needed data here.
	You can/should save your database object or connection in the class.
	*/
	function __construct(){
	
		$this->databaseObject	 =	new Database();
		$this->userData			 =	$this->databaseObject->getExampleData();
	}
	
	//This is an example of something you could return to the controller
	function getUsers(){
		
		//Strips ID and e-mail
		foreach($this->userData as $data){
		
			$array[] = array_splice($data, 0, 2);
		}
		
		//Returns data to controller
		return($array);
	}
}


?>