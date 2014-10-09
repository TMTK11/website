<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once(DS . 'controller' . DS . 'errorController.php');
require_once(DS . "model" . DS . "controllerModel.php");

if(!isset($_SESSION['user']['userRole']))
	$_SESSION['user']['userRole'] = 'guest';

class Controller{
	
	//Controller vars
	private $url;				//Requested URL, cleaned and in array
	private $state;				//Current state of the controller
	private $pageController;	//The pagecontroller as requested by user
	private $activeControllers;
	private $database;

	//Constructor
	public function __construct($url){
		
		$this->database = new ControllerModel();
		$this->activeControllers = $this->database->getActiveControllers();
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
				
		if(!in_array(strtolower($type), $this->activeControllers)){
			//THROW INACTIVE ERROR PARTY
			$this->state = "CONTROLLER_INACTIVE";

		}elseif(in_array(strtolower($type) . "Controller.php", $controllers)){
			
			//Get and create controller
			require_once($type . "Controller.php");

			$controllerName			 =	ucfirst($type) . "Controller";
			$this->pagecontroller 	 =	new $controllerName($this->url);

			//Set the state for the master controller
			$this->state 			 =	"DONE";

		}else{

			//Set the state for the master controller
			$this->state = "CONTROLLER_NOT_FOUND";

		}

	}

	//HTML output
	public function getHTML(){
		switch ($this->state ){
			//Page output / error handling
			case 'DONE':
				
				//Gets HTML from pagecontroller and return it to index.php
				$html = $this->pagecontroller->getHTML();
				return($html);
				
				break;
			case 'CONTROLLER_INACTIVE':
				
				//Get errorpage from errorcontroller
				$errorController = new errorController(array("title" => "Inactief!", "message"=>"Pagina is niet (meer) actief" ));
				return($errorController->getHTML());
				
				break;
			case 'CONTROLLER_NOT_FOUND':

				//Get errorpage from errorcontroller
				$errorController = new errorController(array("title" => "Kritieke fout!", "message"=>"Fout tijdens het laden van de pagina. Neem contact op met de eigenaar van deze pagina." ));
				return($errorController->getHTML());
				
				break;
			default:
				
				//Get errorpage from errorcontroller
				$errorController = new errorController(array("title" => "Fout!", "message"=>"Een onbekende fout heeft zich voorgedaan. Probeer het opnieuw." ));
				return($errorController->getHTML());

				break;
		}
	}
}

?>