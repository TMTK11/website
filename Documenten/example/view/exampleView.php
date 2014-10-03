<?php

/*
Your classname should be your pluginname + View
Interaction with this class can be however you please but it's recommended to follow this patern.
*/
class ExampleView{
	
	private $userData;

	/*
	Your data should come from the controller and should be saved to the object
	It should already be checked for injections/errors
	*/
	public function __construct($details){
		
		$this->userData	 = $details;
	}
	
	//Again, function name is up to you but please just use this patern.
	public function getHTML(){
		
		//Doctype/head elements
		$html	 =	"<!DOCTYPE html><head><title>Example!</title></head><body>";
		$html	.=	"<ul>";
		
		//Adds list of usernames
		foreach($this->userData as $user){
			
			$html	.=	"<li>" . $user['Username'] . "</li>";
		}
		
		//Closing the document
		$html	.=	"</ul></body></hmtml>";
		
		//Return HTML to controller
		return($html);
	}
}

?>