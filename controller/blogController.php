<?php

require_once("/view/layoutView.php");

class BlogController{
	
	function __construct(){

		return(true);

	}
	
	public function getHTML(){
		
		$message	 =	"<h1>Blog</h1>";
		$title		 =	"Blog ";
		
		$details = array("contentLeft"=>$message, "title"=>$title);
		
		$layout	 =	new LayoutView($details);
		
		return($layout->getHTML());
	}
}

?>