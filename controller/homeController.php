<?php

require_once("/controller/layoutController.php");

class HomeController{
	
	function __construct(){

		return(true);
	}
	
	public function getHTML(){
		
		$message	 =	"<h1>Home</h1>";
		$message	.=	"<p>Welkom op de pagina voor TMTK1-11. Hier maken wij ons MVC CMS.</p>";
		$title		 =	"Home ";
		
		$details = array("contentLeft"=>$message, "title"=>$title);
		
		$layout	 =	new LayoutController($details);
		
		return($layout->getHTML());
	}
}

?>