<?php

require_once("/view/layoutView.php");
class MediaController{

	public $type;
	public $name;
	public $data;


	public function __construct($type,$name,$data,$action)
	{

	}



	public function getHTML()
	{
		$message = "<h1>Media</h1>";
	
		$title = "Media";

		$details = array("contentLeft"=>$message, "title"=>$title);

		$layout = new layoutView($details);

		return ($layout->getHTML());

	}







}

?>