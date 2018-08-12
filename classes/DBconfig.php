<?php
class DBConfig{
	private $_hostname = "localhost";
	private $_username = "root";
	private $_password = "";
	private $_database = "project";

	protected $connection;

	public function __construct(){
		if(!isset($this->connection)){

			$this->connection = new mysqli($this->_hostname, $this->_username, $this->_password, $this->_database);

			if(!isset($connection)){
				echo "Could not make a database connection";
				exit;
			}

			return $this->connection;
		}
	}
}

?>