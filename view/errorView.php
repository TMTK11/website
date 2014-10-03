<?php

class ErrorView{
	
	private $details;

	public function __construct($details){
		
		$this->details = $details;

		return(true);

	}

	public function getHTML(){
		
		$message	 =	"<h1 class='red'>" .(isset($this->details['title'])? $this->details['title'] : "An error occurerd") . "</h1>";
		$message	.=	"<p>" . $this->details['message'] . "</p>";
		
		return($message);
	}
}

?>