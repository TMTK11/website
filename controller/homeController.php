<?php

require_once("/controller/layoutController.php");
require_once( ROOT. DS . "model" . DS ."UserModel.php");

class HomeController{
	
	private $url;
	private $state;
	private $usermodel;

	function __construct($url){

		$this->usermodel = new UserModel();
		$this->url = $url;

		if($url[1] == 'login'){
	
			$result = $this->usermodel->checkUser($_POST['username'],hash("sha256",$_POST['password']));

			$this->loginResult = $result;
		}

		return(true);
	}
	
	public function getHTML(){
		
		if($this->url[1] == 'login'  && $this->loginResult){

			$message	 ="<h1>Welkom </h1>";
			$message	.=	"<p>U ben nu ingelogd.</p>";
			$title		 =	"Login ";
			
			$details = array("contentLeft"=>$message, "title"=>$title);
			
			$layout	 =	new LayoutController($details);
			
			$html = $layout->getHTML();

		}elseif($this->url[1] == 'login'  && !$this->loginResult){
		
			$errorController = new errorController(array("title" => "Foute login!", "message"=>"Verkeerde gebruikersnaam of wachtwoord." ));
			$html = $errorController->getHTML();
		
		}else{

			$message	 =	"<h1>Home</h1>";
			$message	.=	"<p>Welkom op de pagina voor TMTK1-11. Hier maken wij ons MVC CMS.</p>";
			$title		 =	"Home ";
			
			$details = array("contentLeft"=>$message, "title"=>$title);
			
			$layout	 =	new LayoutController($details);
			
			$html = $layout->getHTML();
		}
		
		return($html);
	}
}

?>