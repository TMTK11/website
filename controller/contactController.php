<?php

require_once(DS . "model" . DS . "contactModel.php");
require_once(DS . "view" . DS . "contactView.php");
require_once(DS . "model" . DS . "pageModel.php");

class ContactController{

	private	$url;
	private	$mode;

	public function __construct($url){

		$this->url = $url;

		if($url[1] == "send"){
		
			$this->mode = "send";
			$contactModel = new ContactModel();

			$contactModel->sendMessage("test", "test@ict-lab.nl");
		}


	}

	public function getHTML(){

		$contactView =	new ContactView(array("title"=>"Contact"));
		$html		 =	$contactView->getHTML();

		return($html);
	}

}

?>