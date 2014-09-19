<?

class database{
	
	public $stmt;
	public $host;
	public $dbName;
	public $user;
	public $pass;







	public function __construct()
	{
		$this->host 	= "Localhost";
		$this->user 	= "tmtk-11";
		$this->pass 	= "ySAbNX";
		$this->dbName   = "dbtmtk_11";
		$db = new PDO("mysql:");
	}
	





}



?>