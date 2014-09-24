<?php

require_once("/view/errorView.php");


class errorController{

	private $content;
	private $errorView;

	public function __construct($details){

		$this->errorView = new errorView($details);

	}

	public function getHTML(){

		return $this->errorView->getHTML();
	}
}

?>