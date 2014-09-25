<?php
require_once('core/database.php');
class mediaModel{




	public function __construct()
	{
		$db = new database();
	}

	public function insrtMedia()
	{
		
		$db->insert();			

	}




}



?>