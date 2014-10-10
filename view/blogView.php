<?php

require_once("/controller/blogController.php");

class BlogView{
	
	private $details;

	public function __construct($details){
		
		$this->details = $details;
	}

	public function getHTML(){
		$title = $this->details['title'];

		$content = "
		<div id='blog-container'>
		<div id='blog-post'>
		<div id='blog-title'><h1>Test post</h1></div>
		<div id='blog-message'>gdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjgh</div>
		</div>
			<div id='blog-post'>
		<div id='blog-title'><h1>Test post</h1></div>
		<div id='blog-message'>gdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjgh</div>
		</div>
			<div id='blog-post'>
		<div id='blog-title'><h1>Test post</h1></div>
		<div id='blog-message'>gdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjghgdfhgdfhfdghgfjhfgdjghfdjhgdjhgdjhgjgh</div>
		</div>
		<div style='clear:both;'></div>
		</div>

		";

		$details = array("contentLeft"=>$content, "title"=>$title);
		
		$layout	 =	new LayoutController($details);
		
		return($layout->getHTML());
	}
}

?>