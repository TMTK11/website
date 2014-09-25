<?php

require_once("/controller/errorController.php");

class Controller{
	
	//Controller vars
	private $url;
	private $state;
	private $pageController;

	//Constructor
	public function __construct($url){
		
		$this->url = $url;
	}

	//Runs the controller creating the page
	public function start(){
		$type	 =	$this->url[0];
		
		//If no page is specified user is redirected to home
		if(!isset($type) || null == $type)
			$type	 =	"home";

		//Scan all controllers
		$controllers = scandir("controller");
		
		unset($controllers['0']); //Removes .
		unset($controllers['1']); //Removes ..
		
		//Check if specified controller exists
		if(in_array($type . "Controller.php", $controllers)){
			
			require_once($type . "Controller.php");
			
			//Page logic here
			$controllerName = ucfirst($type) . "Controller";
			
			$this->pageController = new $controllerName($this->url);

			//Set the state
			$this->state = "DONE";

		}else{

			//Error logic here
			$this->state = "NOT_EXIST";

		}

	}

	//HTML output
	public function getHTML(){

		//Check for state
		if("DONE" != $this->state){

			//Get errorpage from errorcontroller
			$errorController = new errorController(array("title" => "Fout!", "message"=>"Pagina kon niet worden gevonden" ));

			return($errorController->getHTML());

		}else{
			//Gets HTML from pagecontroller and return it to index.php
			$html = $this->pageController->getHTML();
			
			return($html);
		}

	}
}

?>