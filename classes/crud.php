<?php
include_once 'DBConfig.php';

class Crud extends DBConfig{

	public function __construct(){
		parent::__construct();
	}

	public function getData($query){
		$result = $this->connection->query($query);

		if($result == false){
			return false;
		}

		$rows = array();

		while($row = $result->fetch_assoc()){
			$rows[] = $row;
		}

		return $rows;
	}
}
?>