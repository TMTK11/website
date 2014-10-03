<?php

require_once("/view/errorView.php");
require_once("/controller/layoutController.php");

class errorController{

	private $errorView;	//Errorview Class

	public function __construct($details){

		//Create new errorview with given details
		$this->errorView = new errorView($details);

	}

	public function getHTML(){

		$title		 =	"Errorpage ";
		$message	 =	$this->errorView->getHTML();
		
		$details = array("contentLeft"=>$message, "title"=>$title);
		
		$layout		 =	new LayoutController($details);
		return $layout->getHTML();
	}
}

?>