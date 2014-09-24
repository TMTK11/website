<?php

require_once("/controller/errorController.php");

class Controller{

	private $url;
	private $state;

	public function __construct($url){

		$this->url = $url;

	}

	//Runs the controller creating the page
	public function start(){

		$type	 =	$this->url[0];

		if(!isset($type) || null == $type){

			$type	 =	"home";
		}

		if(include("/controller/" . $type . "Controller.php")){
			
			//Page logic here
			

			//Check if plugin is active


			//Set the state
			$this->state = "DONE";

		}else{

			//Error logic here
			$this->state = "NOT_EXIST";

		}

	}

	public function getHTML(){

		if("DONE" != $this->state){

			$errorController = new errorController(array("title" => "Fout!"));

			return($errorController->getHTML(array("title" => "e")));

		}else{

			return("Content");
		}

	}
}

?>