<?php

require_once("/view/errorView.php");

class errorController{

	private $errorView;	//Errorview Class

	public function __construct($details){

		//Create new errorview with given details
		$this->errorView = new errorView($details);
	}

	public function getHTML(){

		return $this->errorView->getHTML();
	}
}

?>