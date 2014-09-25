<?php

require_once("/view/backendView.php");


class backendController{

	private $content;
	private $backendView;
	private $url;

	public function __construct($url){

		$this->backendView = new backendView();
		$this->url = $url;
	}

	public function getHTML(){
	switch($this->url[1]){
		case "home":
			$pagename = "Home";
			$return = $this->backendView->getHeader($pagename);
			
			break;
		case "menu":
			$pagename = "Module Manager";
			$return = $this->backendView->getHeader($pagename);
			break;
		case "page":
			$pagename = "Pagina Editor";
			$return = $this->backendView->getHeader($pagename);
			break;
		case "gallery":
			$pagename = "Media Gallerij";
			$return = $this->backendView->getHeader($pagename);
			break;
		case "modules":
			$pagename = "Module Manager";
			$return = $this->backendView->getHeader($pagename);
			break;
		case "calendar":
			$pagename = "Kalender";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getCalendar();
			break;
		case "settings":
			$pagename = "Instellingen";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getSettings();
			break;
		default:
			$pagename = "404";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getContent($pagename);
	}
	
		
		$return .= $this->backendView->getFooter();
		return $return;
		
	}
}

?>