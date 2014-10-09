<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require_once(DS . 'controller'	. DS . 'errorController.php');
require_once(DS . "model"		. DS . 'controllerModel.php');

//Sets user to guest if no role is asigned yet. Prevents notices furter on.
if(!isset($_SESSION['user']['userRole']))
	$_SESSION['user']['userRole'] = 'guest';
/*
Summary : 
Checks requests, makes controller, returns HTML
*/
class Controller{
	
	//Controller vars
	private $url;				//Requested URL, cleaned and in array
	private $state;				//Current state of the controller
	private $pageController;	//The pagecontroller as requested by user
	private $activeControllers; //List of all controllers that have an active page 
	private $database;			//Database object originating from ControllerModel ( MiesConnection )

	//Constructor
	public function __construct($url){
		
		$this->database = new ControllerModel();
		$this->activeControllers = $this->database->getActiveControllers();
		$this->url = $url;
	}

	//Runs the controller creating the page
	public function start(){
		$type	 =	strtolower($this->url[0]);
		
		//If no page is specified user is redirected to home
		if(!isset($type) || null == $type)
			$type	 =	"home";

		/*
			TODO: remove this and just use a file_exists() instead. 
		*/
		//Scan all controllers
		$controllers = scandir("controller");
		
		unset($controllers['0']); //Removes .
		unset($controllers['1']); //Removes ..
		
		//Checks if controller has active page associated
		if(!in_array($type, $this->activeControllers)){
			//THROW INACTIVE ERROR PARTY
			$this->state = "CONTROLLER_INACTIVE";

		//Checks if controller has a file associated with it
		}elseif(in_array(strtolower($type) . "Controller.php", $controllers)){
			
			//Get and create controller
			require_once($type . "Controller.php");

			$controllerName			 =	ucfirst($type) . "Controller";
			$this->pagecontroller 	 =	new $controllerName($this->url);

			$this->state 			 =	"DONE"; //Succesfully iniated requested controller

		//If both conditions fail there is no controller to be found. This is bad.
		}else{

			$this->state = "CONTROLLER_NOT_FOUND";
		}

	}

	//HTML output
	public function getHTML(){

		switch ($this->state ){
		
			//Page output / error handling
			case 'DONE':
				
				$html = $this->pagecontroller->getHTML();
				
				return($html);
				
				break;
			case 'CONTROLLER_INACTIVE':
				
				$message = array(
					"title"		=> "Inactief!", 
					"message"	=> "Pagina is niet (meer) actief"
				);

				$errorController = new errorController($message);
				return($errorController->getHTML());
				
				break;
			case 'CONTROLLER_NOT_FOUND':

				$message = array(
					"title" => "Kritieke fout!",
					"message"=>"Fout tijdens het laden van de pagina. Neem contact op met de eigenaar van deze pagina."
				);

				$errorController = new errorController($message);
				return($errorController->getHTML());
				
				break;
			default:
				
				$message = array(
					"title" => "Fout!",
					"message"=>"Een onbekende fout heeft zich voorgedaan. Probeer het opnieuw."
				);
				
				$errorController = new errorController($message);
				return($errorController->getHTML());

				break;
		}
	}
}