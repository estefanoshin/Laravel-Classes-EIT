<?php
class Conexion {
	protected $hostname = 'localhost';
	protected $username = 'root';
	protected $password = '';
	protected $dbname = 'phpdb';

	function conectar () {
		$pdo = new PDO ("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
	return $pdo;
	}
	
}

?>