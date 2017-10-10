<?php
class BaseDatos extends PDO
{
	private $dbname = 'gobierno';
	private $host = '192.168.0.104';
	private $user =  'burocrate';
	private $pass = 'cisco';
	private $port = 5432;
	private $dbh;

	public function __construct()
	{
		try{
			$this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass;");
		} catch (PDOException $pe){
			echo $pe->getMessage();
		}
	}

	public function close_con(){
		$this->dbh = null;
	}

}
?>