<?php

class LayoutView{
	
	private $title;
	private $menuOptions;
	
	public function __construct($content){
		
		//Get title and menuoptions from content variable
		$this->title		 = (isset($content['title']) ? $content['title'] : "Geen unieke titel");
		$this->menuOptions	 = $content['menuOptions'];
		
		//Save as object variable
		$this->content		 = $content;

		return(true);
	}

	public function getHTML(){
		//check login
	
		//Create menu
		$navMenu = "<ul id=\"menu\">";
		foreach($this->menuOptions as $key => $value) {
			//blahahah
			$navMenu .= "<li><a href='" . $value . "'>" . $key . "</a></li>";
		}
		$navMenu .= "</ul>";
		
		//Page HTML
		$html	 =	"<!DOCTYPE html>
	<html>

	<head>
		<!-- Title -->
		<title>" . $this->title . " | TMTK1 - Groep 11 - CMS</title>
		
		<!-- Style -->
		<link rel=\"stylesheet\" href=\"/css/reset.css\"/>
		<link rel=\"stylesheet\" href=\"/css/style.css\"/>

		<!-- Scripts -->
		<script src=\"/scripts/jquery.js\"></script>
		
	</head>

	<body>
		<!-- EDIT BAR -->
		<div id=\"edit-wrapper\">
			
			<div id=\"edit\">
			<form id='formlogin' method='POST' action='/home/login'>
				<input type='text' name='username' placeholder='E-mail'/>
				<input type='password' name='password' placeholder='Password'/>
				<input type='submit' name='checklogin' value='Login'/>
				</form>
			
			</div>

		</div>	
		
		<!-- HEADER -->
		<div id=\"header\">
			
			<!-- MENU -->
			" . $navMenu . "
		</div>
		
		
		<!-- CONTENT -->
		<div id=\"content\">
			
			<!-- CONTENT-LEFT -->
			<div id=\"content-left\">
				" . $this->content['contentLeft'] . "

	
			</div>
			
			<!-- CONTENT-RIGHT -->
			<div id=\"content-right\">
				<div class=\"widget\">
					<h1>Weerbericht</h1>
					<p>Hier het weerbericht ofzo. <br/> Widgets zouden ook modulair kunnen</p>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<div id=\"footer\">
			<p>TMTK1-11 | Mies van der Lippe - Michael de Jong - Oscar Druiventak | GLR 2014-2015</p>
		</div>
		
	</body>

	</html>";
		
		return($html);
	}





}

?>