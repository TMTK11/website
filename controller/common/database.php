<?php

class Database{

	private $PDO;
	private $stmt;
	protected $host = "145.118.4.13";
	protected $dbName ="dbtmtk_11";
	protected $dbUsername = "tmtk-11";
	protected $dbPassword= "ySAbNX";


	public function __construct()
	{
		$this->PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";",$this->dbUsername,$this->dbPassword);
	}

	public function getExampleData(){
		
		$array	 =	array(
			0	=>	array("Username" => "Mies", "Email" => "Mies@example.com"),
			1	=>	array("Username" => "Oscar", "Email" => "Oscar@example.com"),
			2	=>	array("Username" => "Michael", "Email" => "Michael@example.com"),
		);
		
		return($array);
	}

	public function checkUserLogin($username,$password)
	{
		$sql = "SELECT * FROM `users` WHERE email='$username' AND password='$password'";
		$this->stmt = $this->PDO->prepare($sql);
		$this->stmt->execute();
		if($this->stmt->rowCount() > 0)
		{
			
			$userinfo = array();
			while($result = $this->stmt->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $result['id'];
				$data[] = $result['role'];
			}
			$userinfo['userID'] =   $data[0];
			$userinfo['userRole'] = $data[1];
			$_SESSION['user'] = $userinfo;
			
			return (true);

		}
		else
		{
			return (false);
		}
	}

	public function getUserInformation($id)
	{
		$sql = "SELECT * FROM `users` WHERE id='$id'";
		$this->stmt = $this->PDO->prepare($sql);
		$this->stmt->execute();
		if($this->stmt->rowCount() > 0)
		{
			
		
			while($result = $this->stmt->fetch(PDO::FETCH_ASSOC))
			{
				$data = $result;
			}
			
			return ($data);

		}
	
	}
	public function changeSettings($id,$firstname,$lastname,$email,$password)
	{
		$sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password' WHERE `id`='$id'";
		$this->stmt = $this->PDO->prepare($sql);
		$this->stmt->execute();
		if($this->stmt->rowCount())
		{
		return(true);
		}else{
			return(false);
		}
	}

	public function insert($query)
	{
		

		$this->stmt = $this->PDO->prepare($query);
		$this->stmt->execute();
		if($this->stmt)
		{
			return true;
		}


	}
	





}



?>