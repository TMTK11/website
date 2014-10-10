<?php

require_once("/model/common/miesConnection.php");

class GalleryModel extends MiesConnection{

	function __construct(){
	
		parent::__construct();
	}

	public function getImages(){
	
		$query = "SELECT * FROM `media`";
		$result = parent::query($query);
		return $result;
	}
}


?>