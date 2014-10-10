<?php

require_once("/model/blogModel.php");
require_once("/view/blogView.php");

   if(!isset($_SESSION['user']['userRole']) == "Admin")
	$_SESSION['user']['userRole'] = 'guest';


class BlogController{

	private	$url;
	private	$mode;

	public function __construct($url){

		$this->url = $url;

		if($url[1] == "send"){
		
			$this->mode = "send";
			$blogModel = new ContactModel();

			$blogModel->sendMessage("test", "test@ict-lab.nl");
		}


	}

	public function getHTML(){

		$blogView =	new blogView(array("title"=>"Contact"));
		$html		 =	$blogView->getHTML();

		return($html);
	}

}

?>