<?php

require_once("/controller/blogController.php");

class BlogView{
	
	private $details;
	private $data;

	public function __construct($details,$data){
		
		$this->details = $details;
		$this->data = $data;
	}

	public function getHTML(){
		$title = $this->details['title'];
		$posts = $this->getData();


		$content = "<!-- CONTENT-LEFT -->
			<div id=\"content-left\">
		

	
			
		<div id='blog-container'>
		".	$posts	
     ."
	
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
					<textarea name='editor1' >

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

	private function getData()
	{
		$result = "";
		foreach($this->data as $d)
		{
			$result .= "<div id='blog-post'>";
			$result .= "<div id='blog-title'><h1>". $d['Title']."</h1></div>";
			$result .= "<div id='blog-message'>".$d['message']."</div>";
			$result .= "</div>";
		
		}
		return($result);
	}
}

?>