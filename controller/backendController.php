<?php

require_once("/view/backendView.php");


class backendController{

	private $content;
	private $backendView;

	public function __construct($page){

		$backendView = new backendView();

	}

	public function getHTML(){

		return $this->backendView->getHTML();
	}
}

?>