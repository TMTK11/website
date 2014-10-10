<?php

require_once("/controller/layoutController.php");

class GalleryView{
	
	private $details;

	public function __construct(){

	}

	public function getHTML($images){
		$title = $this->details['title'];

		$content="";
		
		//print_r($images);
		
		foreach($images as $image=>$value){
			$content .= "<img height='140' width='140' src='/database/".$images[0]['file']."' />".$images[0]['file']."<br />";
		}

		$details = array("contentLeft"=>$content, "title"=>$title);
		
		$layout	 =	new LayoutController($details);
		
		return($layout->getHTML());
	}
}

?>