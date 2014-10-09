<?php

require_once("/view/backendView.php");
require_once("/model/backendModel.php");

class backendController{

	private $content;
	private $backendView;
	private $url;
	public $model;

	public function __construct($url){

		$this->backendView = new backendView();
		$this->url = $url;
		$this->checkuser();
		$this->model = new backendModel();

	}

	public function getHTML(){
	
	switch($this->url[1]){
		case "login":
			$pagename = "Home";
			$return = $this->backendView->getLogin();
			break;
		case "home":
			$pagename = "Home";
			$return = $this->backendView->getHeader($pagename);
			break;
		case "menu":
			$pagename = "Menu Editor";
			$return = $this->backendView->getHeader($pagename);
			break;
		case "pages":
			$pagename = "Pagina Editor";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getPageList();
			break;
		case "page":
			$pagename = "Pagina Editor";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getPageEditor();
			break;
		case "gallery":
			$pagename = "Media Gallerij";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getGallery();
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
		case "editpage":
			$pagename = "Edit Page";
			$return = $this->backendView->getHeader($pagename);
			//$return .= $this->backendView->getEditPage();
			break;
		default:
			$pagename = "404";
			$return = $this->backendView->getHeader($pagename);
			$return .= $this->backendView->getContent($pagename);
	}
	
		
		$return .= $this->backendView->getFooter();
		return $return;
		
	}

	public function checkuser()
	{
		if(!$_SESSION['user']){
			header('location:/home');
		}else{

			$this->model->getUserInfo($_SESSION['user']);
			
		}
	}
}

?>