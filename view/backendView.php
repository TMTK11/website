<?php

class backendView{
	
	private $page;

	public function __construct(){
		return(true);

	}
	
	public function getHeader(){

		return("
			<!DOCTYPE html>
			<html lang=\"en\">
			<head>
			<meta charset=\"utf-8\">
			<title>Admin Paneel</title>
			<meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\">
			<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
			<meta name=\"description\" content=\"\">
			<meta name=\"author\" content=\"\">

			<link rel=\"stylesheet\" type=\"text/css\" href=\"/view/backend/lib/bootstrap/css/bootstrap.css\">
			
			<link rel=\"stylesheet\" type=\"text/css\" href=\"/view/backend/stylesheets/theme.css\">
			<link rel=\"stylesheet\" href=\"/view/backend/lib/font-awesome/css/font-awesome.css\">

			<script src=\"/view/backend/lib/jquery-1.7.2.min.js\" type=\"text/javascript\"></script>

			<!-- Demo page code -->

			<style type=\"text/css\">
				#line-chart {
					height:300px;
					width:800px;
					margin: 0px auto;
					margin-top: 1em;
				}
				.brand { font-family: georgia, serif; }
				.brand .first {
					color: #ccc;
					font-style: italic;
				}
				.brand .second {
					color: #fff;
					font-weight: bold;
				}
			</style>

			<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			  <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
			<![endif]-->

		  </head>

		  <!--[if lt IE 7 ]> <body class=\"ie ie6\"> <![endif]-->
		  <!--[if IE 7 ]> <body class=\"ie ie7 \"> <![endif]-->
		  <!--[if IE 8 ]> <body class=\"ie ie8 \"> <![endif]-->
		  <!--[if IE 9 ]> <body class=\"ie ie9 \"> <![endif]-->
		  <!--[if (gt IE 9)|!(IE)]><!--> 
		  <body class=\"\"> 
		  <!--<![endif]-->
			
			<div class=\"navbar\">
				<div class=\"navbar-inner\">
						<ul class=\"nav pull-right\">
							
							<li><a href=\"#\" class=\"hidden-phone visible-tablet visible-desktop\" role=\"button\">Settings</a></li>
							<li id=\"fat-menu\" class=\"dropdown\">
								<a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
									<i class=\"icon-user\"></i> Jack Smith
									<i class=\"icon-caret-down\"></i>
								</a>

								<ul class=\"dropdown-menu\">
									<li><a tabindex=\"-1\" href=\"#\">My Account</a></li>
									<li class=\"divider\"></li>
									<li><a tabindex=\"-1\" class=\"visible-phone\" href=\"#\">Settings</a></li>
									<li class=\"divider visible-phone\"></li>
									<li><a tabindex=\"-1\" href=\"sign-in.html\">Logout</a></li>
								</ul>
							</li>
							
						</ul>
						<a class=\"brand\" href=\"index.html\"><span class=\"first\">Your</span> <span class=\"second\">Company</span></a>
				</div>
			</div>
			<div class=\"sidebar-nav\">
				<a href=\"#dashboard-menu\" class=\"nav-header\" data-toggle=\"collapse\"><i class=\"icon-dashboard\"></i>Dashboard</a>
				<ul id=\"dashboard-menu\" class=\"nav nav-list collapse in\">
					<li><a href=\"index.html\">Home</a></li>
					<li ><a href=\"users.html\">Menu Editor</a></li>
					<li ><a href=\"users.html\">Page Editor</a></li>
					<li ><a href=\"user.html\">Gallerij</a></li>
					<li ><a href=\"media.html\">Module Manager</a></li>
					<li ><a href=\"calendar.html\">Kalender</a></li>
					
				</ul>
			</div>

		");
	}
	
	public function getContent(){

		return("
			<div class=\"content\">
				
				<div class=\"header\">
				  <h1 class=\"page-title\">Dashboard</h1>
				</div>
				<ul class=\"breadcrumb\">
					<li><a href=\"index.html\">Home</a> <span class=\"divider\">/</span></li>
					<li class=\"active\">Dashboard</li>
				</ul>

				<div class=\"container-fluid\">

				<div class=\"row-fluid\">

					<!--<div class=\"alert alert-info\">
						<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
						<strong>Just a quick note:</strong> Hope you like the theme!
					</div>!-->

					<div class=\"block\">
					<a href=\"#page-stats\" class=\"block-heading\" data-toggle=\"collapse\">Latest Stats</a>
					<div id=\"page-stats\" class=\"block-body collapse in\">

					<p>AAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
					</div>
					</div>
					</div>
				</div>
		");
	}
	
	public function getFooter(){
	return("

			<script src=\"lib/bootstrap/js/bootstrap.js\"></script>
			<script type=\"text/javascript\">
				$(\"[rel=tooltip]\").tooltip();
				$(function() {
					$('.demo-cancel-click').click(function(){return false;});
				});
			</script>
			
		  </body>
		</html>"
		
		);
	}
	
}

?>