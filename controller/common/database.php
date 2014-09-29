<?php

class database{

	protected $PDO;
	public $stmt;
	public $host = "localhost";
	public $dbName ="test";

	public function __construct()
	{
		$this->PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";","tmtk-11","ySAbNX");
	}


	public function select($query)
	{
		$this->stmt = $this->PDO->prepare($query);
		$this->stmt->execute();
		if($this->stmt)
		{
			$data = array();
			while($result = $this->stmt->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $result;
			}
			return $data;

		}
		else
		{
			return false;
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