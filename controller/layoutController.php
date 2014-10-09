<?php

require_once(DS . "model" . DS . "layoutModel.php");
require_once(DS . "view"  . DS . "layoutView.php");

class LayoutController{
	
	private $content;

	
	function __construct($content){
		
		//Make new layout
		$this->layoutModel = new LayoutModel();
		
		//Get menu options
		$menuOptions = $this->layoutModel->getMenuOptions();
		
		$content['menuOptions'] = $menuOptions;
		
		$this->content	 = $content;
	
		
		
	}

	
	function getHTML(){
	
		$layoutView		=	new LayoutView($this->content);
		
		return($layoutView->getHTML());
	}

}



?>