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

	if($url[1] == 'upload'){


		
			$this->userModel = new UserModel();
			if($_POST['title'] AND $_POST['editor1'] != '')
			{
				$data = $this->userModel->BlogPost($_POST['title'],$_POST['editor1']);
				if($data)
					header('location:/blog');
			}else{
				header('location:/blog/msg/Niets ingevuld.');
			}


		}


	}

	public function getHTML(){

		$data = $this->userModel->getPost();
		print_r($data);
		$blogView =	new blogView(array("title"=>"Contact"));
		$html		 =	$blogView->getHTML();

		return($html);
	}

}

?>