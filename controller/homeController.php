<?php

require_once("/controller/layoutController.php");

class HomeController{
	
	private $url;

	function __construct($url){

		$this->url = $url;

		if($url[1] == 'login'){
			//Login
			
		}

		return(true);
	}
	
	public function getHTML(){
		
		if($url[1] == login  && $loginsucces){

			$hmtl = "login succesvol"; 

		}elseif($url[1] == login  && !$loginsucces){
		
			$errorController = new errorController(array("title" => "Foute inlog!", "message"=>"Verkeerde gebruikersnaam of wachtwoord." ));
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