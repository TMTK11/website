<?php

require_once("/controller/layoutController.php");

class ContactView{
	
	private $details;

	public function __construct($details){
		
		$this->details = $details;
	}

	public function getHTML(){
		$title = $this->details['title'];

		$content = "<h1>Contact</h1><p>Neem contact op</p>
		<form method=\"post\" action=\"send\">
			<table>
				<tr><td>Uw Email adres: </td><td><input type=\"text\" name=\"Email\"/></td></tr>
				<tr><td>Uw bericht : </td><td><input type=\"text\"name=\"Message\"/></td></tr>
				<tr><td><input type=\"submit\"/></td></tr>
			</table>
		</form>";

		$details = array("contentLeft"=>$content, "title"=>$title);
		
		$layout	 =	new LayoutController($details);
		
		return($layout->getHTML());
	}
}

?>