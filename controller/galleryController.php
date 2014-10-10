<?php

require_once("/view/galleryView.php");
require_once("/model/galleryModel.php");


class GalleryController{
	

	public function __construct($url){

		$this->url = $url;
		
		
	}

	public function getHTML(){
		$galleryModel = new GalleryModel();
		$galleryView = new GalleryView();
		$images = $galleryModel->getImages();
		$html = $galleryView->getHTML($images);
		return($html);
	}
}

?>