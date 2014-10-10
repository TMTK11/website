<?php

require_once( ROOT. DS . "model" . DS ."UserModel.php");
require_once("/view/blogView.php");

   if(!isset($_SESSION['user']['userRole']) == "Admin")
	$_SESSION['user']['userRole'] = 'guest';


class BlogController{

	private	$url;
	private $userModel;


	public function __construct($url){

		$this->url = $url;
		$this->userModel = new UserModel();
	if($url[1] == 'upload'){


		
			
			if($_POST['editor1'] && $_POST['title']  == true)
			{
				$data = $this->userModel->BlogPost($_POST['title'],htmlentities($_POST['editor1']));
			
				
				if($data)
					header('location:/blog');
			}else{
				header('location:/blog/msg/Niets ingevuld.');
			}


		}


	}

	public function getHTML(){

			$data = $this->userModel->getPost();
	
		$blogView =	new blogView(array("title"=>"Blog"),$data);
		$html		 =	$blogView->getHTML();

		return($html);
	}

}

?>