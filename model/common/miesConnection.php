<?php

class MiesConnection extends PDO{

	const db_server   = "145.118.4.13";
	const db_username = "tmtk-11";
	const db_password = "ySAbNX";
	const db_database = "dbtmtk_11";

	public $databaseObj;

	function __construct(){
		$options = array(
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);

		parent::__construct('mysql:host='. miesConnection::db_server . ';dbname=' . miesConnection::db_database, miesConnection::db_username, miesConnection::db_password, $options);
	}

	public function query($query){
        $args 	 = func_get_args();
        array_shift($args);

        $reponse = parent::prepare($query);
        $reponse->execute();
        $result	 = $reponse->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}