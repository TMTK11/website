<?php

class backendView{
	
	private $page;

	public function __construct($page){

		$this->page = $page;

		return(true);

	}

	public function getHTML(){

		return("test");
	}
}

?>