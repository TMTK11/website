<?php

require_once("/controller/errorController.php");

class Controller{

	private $url;
	private $state;
	private $pageController;

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
			$controllerName = ucfirst($type) . "Controller";
			
			$this->pageController = new $controllerName($this->url);

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

			$errorController = new errorController(array("title" => "Fout!", "message"=>"Pagina kon niet worden gevonden" ));

			return($errorController->getHTML(array("title" => "e")));

		}else{
		
			$html = $this->pageController->getHTML();
			
			return($html);
		}

	}
}

?>