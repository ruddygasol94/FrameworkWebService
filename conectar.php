<?php
class BaseDatos extends PDO
{

	private $dbh;

	public function __construct($p_host, $p_port, $p_dbname, $p_user, $p_pass)
	{
		try{
			$this->dbh = parent::__construct("pgsql:host=$p_host;port=$p_port;dbname=$p_dbname;user=$p_user;password=$p_pass;");
		} catch (PDOException $pe){
			echo $pe->getMessage();
		}
	}

	public function close_con(){
		$this->dbh = null;
	}

}
?>