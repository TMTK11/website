<?php
require_once('/controller/common/database.php');

class backendModel{
	protected $db;

	protected $file;
	protected $temp;
	protected $info;
	protected $ext = "";
	protected $extensies = array('image/jpg', 'image/png', 'image/jpeg', 'image/gif');
	public $hashname = "";

	protected $iswatermerk = false;
	protected $watermerk = "watermerk.png";
	
	protected $dir = "../database/media/originals/";
	protected $thumbdir = "../database/media/thumbnails/";
	protected $watermerkdir = "../database/media/watermerk/";
	
	public function __construct($file){
		$this->db = new database();
		$this->file = $file;
		$this->temp = $file['tmp_name'];
		$this->info = getimagesize($this->temp);
	}
	
	public function createThumbnail($width, $height){
		$thumbnail = imagecreatetruecolor($width, $height);
		$ratio = $width / $height;
        $newratio = $this->info[0] / $this->info[1];
		
		
		switch($this->ext){
			case "jpeg":
				$src = imagecreatefromjpeg($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $width, $height, $this->info[0]* 2,$this->info[1]* 2);
				imagejpeg($thumbnail, $this->thumbdir.$this->hashname);
				break;
			case "png":
				$src = imagecreatefrompng($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $width, $height, $this->info[0]* 2,$this->info[1]* 2);
				imagepng($thumbnail, $this->thumbdir.$this->hashname);
				break;
			case "gif":
				$src = imagecreatefromgif($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $width, $height, $this->info[0]* 2,$this->info[1]* 2);
				imagegif($thumbnail, $this->thumbdir.$this->hashname);
				break;
			case "jpg":
				$src = imagecreatefromjpeg($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $width, $height, $this->info[0]* 2,$this->info[1]* 2);
				imagejpeg($thumbnail, $this->thumbdir.$this->hashname);
				break;
		}
	}
	
	public function createWatermerk(){
		$thumbnail = imagecreatetruecolor($this->info[0],$this->info[1]);
		$watermerk = imagecreatetruecolor($this->info[0],$this->info[1]);
		
		switch($this->ext){
			case "jpeg":
				$src = imagecreatefromjpeg($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $this->info[0],$this->info[1], $this->info[0],$this->info[1]);
				$wmsrc = imagecreatefrompng($this->watermerk);
				imagecopyresampled($watermerk, $wmsrc, 50, 50, 0,0, $this->info[0],$this->info[1], 100,100);
				imagecopymerge($thumbnail, $watermerk, 0, 0, 0, 0, $this->info[0],$this->info[1], 50);
				imagejpeg($thumbnail, $this->watermerkdir.$this->hashname);
				break;
			case "png":
				$src = imagecreatefrompng($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $this->info[0],$this->info[1], $this->info[0],$this->info[1]);
				$wmsrc = imagecreatefrompng($this->watermerk);
				imagecopyresampled($watermerk, $wmsrc, 50, 50, 0,0, $this->info[0],$this->info[1], 100,100);
				imagecopymerge($thumbnail, $watermerk, 0, 0, 0, 0, $this->info[0],$this->info[1], 50);
				imagepng($thumbnail, $this->watermerkdir.$this->hashname);
				break;
			case "gif":
				$src = imagecreatefromgif($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $this->info[0],$this->info[1], $this->info[0],$this->info[1]);
				$wmsrc = imagecreatefrompng($this->watermerk);
				imagecopyresampled($watermerk, $wmsrc, 50, 50, 0,0, $this->info[0],$this->info[1], 100,100);
				imagecopymerge($thumbnail, $watermerk, 0, 0, 0, 0, $this->info[0],$this->info[1], 50);
				imagegif($thumbnail, $this->watermerkdir.$this->hashname);
				break;
			case "jpg":
				$src = imagecreatefromjpeg($this->dir.$this->file['name']);
				imagecopyresampled($thumbnail, $src, 0, 0, 0,0, $this->info[0],$this->info[1], $this->info[0],$this->info[1]);
				$wmsrc = imagecreatefrompng($this->watermerk);
				imagecopyresampled($watermerk, $wmsrc, 50, 50, 0,0, $this->info[0],$this->info[1], 100,100);
				imagecopymerge($thumbnail, $watermerk, 0, 0, 0, 0, $this->info[0],$this->info[1], 50);
				imagejpeg($thumbnail, $this->watermerkdir.$this->hashname);
				break;
		}
	}

	private function checkFileExists(){
		if (file_exists($this->dir.$this->file['name'])){
			return true;
		}
		return false;
	}
	
	public function checkType(){
		if (in_array($this->info['mime'], $this->extensies)){
			$string = explode("/", $this->info['mime']);
			$this->ext = $string[1];
			return true;
		}
		return false;
	}
	
	public function moveFile(){
		if (!$this->checkFileExists()){
			$hash = md5($this->file['name'].':'.time());
			$this->hashname = $hash.".".$this->ext;
			if (move_uploaded_file($this->temp, $this->dir.$this->hashname)){
				return true;
			}
		}
		return false;
	}
		
	private function getIPAdress(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	public function getUserInfo($id)
	{
		return($this->db->getUserInformation($id));
	}
}

?>