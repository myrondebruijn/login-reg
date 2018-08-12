<?php

class User{
	public $db;

	public function __construct(){
		$this->db = new mysqli("localhost", "root", "", "project");
	}

	public function check_login($username, $password){
		$password = md5($password);
		$conn = new mysqli("localhost", "root", "", "project");

		$sql = "SELECT * from users WHERE username='$username' AND password='$password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
	            $_SESSION['login'] = true;
	            $_SESSION['username'] = $row['username'];
	            return true;
		    }
		}else{
			return false;
		}
		$conn->close();
	}

}

?>