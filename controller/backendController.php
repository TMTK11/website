<?php

require_once("/view/backendView.php");


class backendController{

	private $content;
	private $backendView;

	public function __construct(){

		$this->backendView = new backendView();

	}

	public function getHTML(){
		$return = $this->backendView->getHeader();
		$return .= $this->backendView->getContent();
		$return .= $this->backendView->getFooter();
		return $return;
		
	}
}

?>