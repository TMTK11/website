<?php

require_once("/controller/layoutController.php");

class BlogController{
	
	function __construct(){

		return(true);
	}
	
	public function getHTML(){
		
		$message	 =	"<h1>Blog</h1>";
		$message	.=	"<p>Welkom op de placeholder blog!</p>";
		$title		 =	"Blog ";
		
		$details = array("contentLeft"=>$message, "title"=>$title);
		
		$layout	 =	new LayoutController($details);
		
		return($layout->getHTML());
	}
}

?>