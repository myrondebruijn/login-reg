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

	public function insert($query){
		$result = $this->connection->query($query);

		if($result == false){
			echo "Could not insert data to the database";
			return false;
		}else{
			return true;
		}
	}

	public function delete($id, $table){
		$query = "DELETE FROM $table WHERE id=$id";
		$result = $this->connection->query($query);

		if($result == false){
			echo "Could not delete id: $id from table: $table";
			return false;
		}else{
			return true;
		}
	}
}
?>