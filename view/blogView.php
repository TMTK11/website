<?php

require_once("/controller/blogController.php");

class BlogView{
	
	private $details;

	public function __construct($details){
		
		$this->details = $details;
	}

	public function getHTML(){
		$title = $this->details['title'];

		$content = "<!-- CONTENT-LEFT -->
			<div id=\"content-left\">
		

	
			
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
		</div>
			
			<!-- CONTENT-RIGHT -->
			<div id=\"content-right\">
				<div class=\"widget\">
					<form method='POST' action='/blog/upload'>
			
					<span>Titel</span>
				
					<input type='text' name='title'>
					<div class='text'>
					<span>Message</span>
					<textarea name='editor1' id='editor1'>

				   </textarea>
					</div>
					<input type='submit' name='postMessage'value='Post'>
					</form>
				</div>
			</div>

		";

		$details = array("contentLeft"=>$content, "title"=>$title);
		
		$layout	 =	new LayoutController($details);
		
		return($layout->getHTML());
	}
}

?>