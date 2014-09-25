<?php

class LayoutView{
	
	private $content;

	public function __construct($content){

		$this->content = $content;

		return(true);

	}

	public function getHTML(){
		
		$content	 = 	$this->content;
		
		$html	 =	"<!DOCTYPE html>
	<html>

	<head>
		<!-- Title -->
		<title>" . $content['title'] . " | TMTK1 - Groep 11 - CMS</title>
		
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
				<form>
					<ul>
						<li class=\"button\"><input type=\"text\" value=\"Page title\"/></li>
						<li class=\"button\">Page title</li>
						<li class=\"button\">Save</li>
					</ul>
				</form>
			</div>
			
		</div>	
		
		<!-- HEADER -->
		<div id=\"header\">
			
			<!-- MENU -->
			<ul id=\"menu\">
			
				<li>Home</li>
				<li>Modules</li>
				<li>Blog</li>
				<li>Account</li>
				<li>Admin Panel</li>
				
			</ul>
		</div>
		
		
		<!-- CONTENT -->
		<div id=\"content\">
			
			<!-- CONTENT-LEFT -->
			<div id=\"content-left\">
				" . $content['contentLeft'] . "
			</div>
			
			<!-- CONTENT-RIGHT -->
			<div id=\"content-right\">
				<div class=\"widget\">
					<h1>Weerbericht</h1>
					<p>Hier het weerbericht ofzo. <br/> Widgets zouden ook modulair kunnen</p>
				</div>
				
				<div class=\"widget\">
					<h1>URL</h1>
					<p></p>
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