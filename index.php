<?php
//require_once("connection.php");

$url		 =	$_SERVER["REQUEST_URI"];
$baseUrl	 =	$_SERVER["SCRIPT_NAME"];
$url		 =	str_replace($baseUrl, '', $url);

$urlArray	 =	array();
$urlArray	 =	explode('/', $url);

if($urlArray[0] == '' || empty($urlArray[0])){
	array_shift($urlArray);
}

//print_r($urlArray);


?>
<!DOCTYPE html>
<html>

<head>
	<!-- Title -->
	<title>TMTK1 - Groep 11 - CMS</title>
	
	<!-- Style -->
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<!-- Scripts -->
	<script src="/scripts/jquery.js"></script>
	
</head>

<body>
	<!-- EDIT BAR -->
	<div id="edit-wrapper">
		
		<div id="edit">
			<form>
				<ul>
					<li class="button"><input type="text" value="Page title"/></li>
					<li class="button">Page title</li>
					<li class="button">Save</li>
				</ul>
			</form>
		</div>
		
	</div>	
	
	<!-- HEADER -->
	<div id="header">
		
		<!-- MENU -->
		<ul id="menu">
		
			<li>Home</li>
			<li>Modules</li>
			<li>Blog</li>
			<li>Account</li>
			<li>Admin Panel</li>
			
		</ul>
	</div>
	
	
	<!-- CONTENT -->
	<div id="content">
		
		<!-- CONTENT-LEFT -->
		<div id="content-left">
			<h1>Header 1</h1>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. <br/>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
		</div>
		
		<!-- CONTENT-RIGHT -->
		<div id="content-right">
			<div class="widget">
				<h1>Weerbericht</h1>
				<p>Hier het weerbericht ofzo. <br/> Widgets zouden ook modulair kunnen</p>
			</div>
			
			<div class="widget">
				<h1>URL</h1>
				<p><?php print_r($urlArray); ?></p>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<div id="footer">
		<p>TMTK1-11 | Mies van der Lippe - Michael de Jong - Oscar Druiventak | GLR 2014-2015</p>
	</div>
	
</body>

</html>