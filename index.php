<?php
//Some basic definitions
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__FILE__));

//Get controller
require_once("/controller/controller.php");

//Strip URL
$url		 =	$_SERVER["REQUEST_URI"];
$baseUrl	 =	$_SERVER["SCRIPT_NAME"];
$url		 =	str_replace($baseUrl, '', $url);

//URL -> Array
$urlArray	 =	array();
$urlArray	 =	explode('/', $url);

//Clean up array
if($urlArray[0] == '' || empty($urlArray[0])){
	array_shift($urlArray);
}

//Create controller
$controller = new controller($urlArray);

//Start controller and get HTML
$controller->start();
$content = $controller->getHTML();

//Print content to page
print($content);

?>