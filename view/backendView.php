     <?php
require_once('/controller/backendController.php');

class backendView{
	
	private $page;

	public function __construct(){
		return(true);

	}
	
	public function getLogin(){
	return("
		<!DOCTYPE html>
		<html lang=\"en\">
		  <head>
			<meta charset=\"utf-8\">
			<title>Bootstrap Admin</title>
			<meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\">
			<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
			<meta name=\"description\" content=\"\">
			<meta name=\"author\" content=\"\">

			<link rel=\"stylesheet\" type=\"text/css\" href=\"/view/backend/lib/bootstrap/css/bootstrap.css\">
			
			<link rel=\"stylesheet\" type=\"text/css\" href=\"/view/backend/stylesheets/theme.css\">
			<link rel=\"stylesheet\" href=\"/view/backend/lib/font-awesome/css/font-awesome.css\">

			<script src=\"/view/lib/jquery-1.7.2.min.js\" type=\"text/javascript\"></script>

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
						</ul>
						<a class=\"brand\" href=\"index.html\"><span class=\"first\">Your</span> <span class=\"second\">Company</span></a>
				</div>
			</div>
			<div class=\"row-fluid\">
			<div class=\"dialog\">
				<div class=\"block\">
					<p class=\"block-heading\">Sign In</p>
					<div class=\"block-body\">
						<form>
							<label>Username</label>
							<input type=\"text\" class=\"span12\">
							<label>Password</label>
							<input type=\"password\" class=\"span12\">
							<a href=\"index.html\" class=\"btn btn-primary pull-right\">Sign In</a>
							<label class=\"remember-me\"><input type=\"checkbox\"> Remember me</label>
							<div class=\"clearfix\"></div>
						</form>
					</div>
				</div>
			  <p><a href=\"reset-password.html\">Forgot your password?</a></p>
			</div>
		</div>


			


			<script src=\"/view/backend/lib/bootstrap/js/bootstrap.js\"></script>
			<script type=\"text/javascript\">
				$(\"[rel=tooltip]\").tooltip();
				$(function() {
					$('.demo-cancel-click').click(function(){return false;});
				});
			</script>
			
		  </body>
		</html>

			
		");
	}
	
	public function getHeader($page,$user){

		return("

			<!DOCTYPE html>
			<html lang=\"en\">
			<head>
			<meta charset=\"utf-8\">
			<title>".$page." - Admin Paneel</title>
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
							
							<li><a href=\"/backend/settings\" class=\"hidden-phone visible-tablet visible-desktop\" role=\"button\">Settings</a></li>
							<li id=\"fat-menu\" class=\"dropdown\">
								<a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
									<i class=\"icon-user\"></i> ".$user['firstname']."
									<i class=\"icon-caret-down\"></i>
								</a>

								<ul class=\"dropdown-menu\">
									<li><a tabindex=\"-1\" href=\"#\">My Account</a></li>
									<li class=\"divider\"></li>
									<li><a tabindex=\"-1\" class=\"visible-phone\" href=\"home\">Settings</a></li>
									<li class=\"divider visible-phone\"></li>
									<li><a tabindex=\"-1\" href=\"/controller/common/logout.php\">Logout</a></li>
								</ul>
							</li>
							
						</ul>
						<a class=\"brand\" href=\"index.html\"><span class=\"second\">CMS</span></a>
				</div>
			</div>
			<div class=\"sidebar-nav\">
				<a href=\"#dashboard-menu\" class=\"nav-header\" data-toggle=\"collapse\"><i class=\"icon-dashboard\"></i>Dashboard</a>
				<ul id=\"dashboard-menu\" class=\"nav nav-list collapse in\">
					<li><a href=\"/backend/home\">Home</a></li>
					<li ><a href=\"/backend/menu\">Menu Editor</a></li>
					<li ><a href=\"/backend/pages\">Page Editor</a></li>
					<li ><a href=\"/backend/gallery\">Gallerij</a></li>
					<li ><a href=\"/backend/modules\">Module Manager</a></li>
					<li ><a href=\"/backend/calendar\">Kalender</a></li>
					
				</ul>
			</div>
<div class=\"content\">
				
				<div class=\"header\">
				  <h1 class=\"page-title\">".$page."</h1>
				</div>
				<ul class=\"breadcrumb\">
					<li><a href=\"home\">Home</a> <span class=\"divider\">/</span></li>
					<li class=\"active\">".$page."</li>
				</ul>

				<div class=\"container-fluid\">

		");
	}
	
	public function getContent($page){

		return("
			
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
	
	function getGallery(){
		return("
		<div class=\"btn-toolbar\">
				<form method='post' enctype='multipart/form-data'>
					<input type='file' name='bestand' style='display:none;'/>
					<input type='submit' class=\"btn btn-primary\" name='upload' value='+ Add Media'/>
				</form>
				
			  <div class=\"btn-group\">
			  </div>
		</div>
		<div class=\"block\">
        <p class=\"block-heading\">Media</p>
        <div class=\"block-body gallery\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
                <img src=\"/view/backend/images/140x140.gif\" class=\"img-polaroid\">
            
            <div class=\"clearfix\"></div>
        </div>
		</div>
		
		");
	}
	
	function getPageList(){
		return("
			<div class=\"btn-toolbar\">
				<button class=\"btn btn-primary\"><i class=\"icon-plus\"></i> Add Page</button>
			  <div class=\"btn-group\">
			  </div>
			</div>
			<div class=\"well\">
				<table class=\"table\">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Pagina</th>
					  <th>Content</th>
					  <th>Gepubliceerd Op</th>
					  <th style=\"width: 26px;\"></th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					<td>1</td>
					  <td>Home</td>
					  <td>Nog niks</td>
					  <td>26-9-2014</td>
					  <td>
						  <a href=\"editpage\"><i class=\"icon-pencil\"></i></a>
						  <a href=\"#remove\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-remove\"></i></a>
					  </td>
					</tr>
				  </tbody>
				</table>
			</div>
		
		");
	}
	
	function getSettings($user){
		return("
		
		<div class=\"btn-toolbar\">
    <button class=\"btn btn-primary\"><i class=\"icon-save\"></i> Save</button>
    <a href=\"#myModal\" data-toggle=\"modal\" class=\"btn\">Delete</a>
  <div class=\"btn-group\">
  </div>
</div>
<div class=\"well\">
    <ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Profile</a></li>
  
    </ul>
    <div id=\"myTabContent\" class=\"tab-content\">
      <div class=\"tab-pane active in\" id=\"home\">
    <form id=\"tab\" method=\"POST\" action=\"/controller/common/changesettings.php\">
       
        <label>First Name</label>
        <input type=\"text\" value=\"".$user['firstname']."\" name=\" firstname\" class=\"input-xlarge\">
        <label>Last Name</label>
        <input type=\"text\" value=\"".$user['lastname']."\" name=\" lastname\"class=\"input-xlarge\">
        <label>Email</label>
        <input type=\"text\" value=\"".$user['email']."\" name=\" email\" class=\"input-xlarge\">
        <label>New Password</label>
        <input type=\"password\"  name=\" password\" class=\"input-xlarge\">
        <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"save\">
        </div>
    </form>
      </div>

  </div>

</div>
		
		
		");
	}
	
	
	function getPageEditor(){
		return("
		
		<div class=\"btn-toolbar\">
    <button class=\"btn btn-primary\"><i class=\"icon-save\"></i> Save</button>
    <a href=\"#myModal\" data-toggle=\"modal\" class=\"btn\">Delete</a>
  <div class=\"btn-group\">
  </div>
</div>
<div class=\"well\">
    <div id=\"myTabContent\" class=\"tab-content\">
      <div class=\"tab-pane active in\" id=\"home\">
    <form id=\"tab\">
        <label>Content</label>
        <textarea value=\"Smith\" rows=\"16\" class=\"input-xlarge\"></textarea>

    </form>
      </div>
      <div class=\"tab-pane fade\" id=\"profile\">
    <form id=\"tab2\" method=\"POST\" action=\"/controller/common/changesettings.php\">

        <div>
            <button class=\"btn btn-primary\">Update</button>
        </div>
    </form>
      </div>
  </div>

</div>
		
		
		");
	}
	
	function getCalendar(){
		return("
	
		<div class=\"row-fluid\">
			<link rel='stylesheet' type='text/css' href='/view/backend/lib/fullcalendar-1.5.3/fullcalendar/fullcalendar.css' />
			<link rel='stylesheet' type='text/css' href='/view/backend/lib/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css' media='print' />
			<script type='text/javascript' src='/view/backend/lib/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js'></script>

			<script type='text/javascript'>

				$(document).ready(function() {

					var date = new Date();
					var d = date.getDate();
					var m = date.getMonth();
					var y = date.getFullYear();

					$('#calendar').fullCalendar({
						header: false,
					});
					$('#calendar').fullCalendar('next');

				});

			</script>
			<style type='text/css'>

				#calendar {
					width: 100%;
					margin: 0 auto;
					}

			</style>



			<div style=\"float:right; margin-top: 1em;\">
				<a href=\"#\" class=\"btn btn-primary\">Add</a>
				<a href=\"#\" class=\"btn btn-danger\">Remove</a>
				<a href=\"#\" class=\"btn btn-info\">Info</a>
				<a href=\"#\" class=\"btn btn-success\">Success</a>
				<a href=\"#\" class=\"btn btn-warning\">Warning</a>
			</div>
			<h2>Upcoming Events</h2>
			<div id='calendar'></div>

	
		");
	
	}
	
	public function getFooter(){
	return("

			<script src=\"/view/backend/lib/bootstrap/js/bootstrap.js\"></script>
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