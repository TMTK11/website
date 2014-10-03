<?php

//Always require your view and model
require_once("/view/exampleView.php");
require_once("/model/exampleModel.php");

//Your classname shuould be your pluginname + Controller
class ExampleController{
	
	//No variables are expected to be public. The master controller only calls functions.
	private	$exampleView;
	
	//In your constructor you should put every interaction with your model. 
	public function __construct($details){

		//Example model is called after it's class
		$exampleModel		 =	new ExampleModel();
		$exampleData		 =	$exampleModel->getUsers();
		
		$this->exampleView	 =	new ExampleView($exampleData);
	}

	/*
	This function is required and a full page is expected in return.
	DO NOT PUT HTML HERE. EVER.
	*/
	public function getHTML(){

		return($this->exampleView->getHTML());
	}
}

?>