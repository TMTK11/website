<?php

class Database{

	protected $PDO;
	public $stmt;
	public $host = "145.118.4.13";
	public $dbName ="dbtmtk_11";

	public function __construct()
	{
		$this->PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";","tmtk-11","ySAbNX");
	}

	public function getExampleData(){
		
		$array	 =	array(
			0	=>	array("Username" => "Mies", "Email" => "Mies@example.com"),
			1	=>	array("Username" => "Oscar", "Email" => "Oscar@example.com"),
			2	=>	array("Username" => "Michael", "Email" => "Michael@example.com")
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
			
		
			while($result = $this->stmt->fetch(PDO::FETCH_ASSOC))
			{
				$data = $result['id'];
			}
			
			return ($data);

		}
		else
		{
			return (false);
		}
	}

	public function insert($query)
	{
		

		$this->stmt = $this->PDO->prepare($query);
		$this->stmt->execute();
		if($this->stmt)
		{
			return "gelukt";
		}


	}
	





}



?>