<?php

class pageContent{

	function __construct(){

	}

	function getContent($page){
		//Fake database
		$data	 =	$array(
			0	=> array("active"=>true, "content"=>"blog", "title"=>"Mijn Konijn"),
			1	=> array("active"=>false, "content"=>"calculator", "title"=>"Mijn niet actieve pagina")
		);

		return((in_array($page, $data)? $array[$page]: false));
	}

}


?>