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

	public function register_user($username, $password, $email){
		$this->db = new mysqli("localhost", "root", "", "project");
        $password = md5($password);
        $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
        //checking if the username or email is available in db
        $check =  $this->db->query($sql) ;
        $count_row = $check->num_rows;
        //if the username is not in db then insert to the table
        if ($count_row == 0){
            $sql1="INSERT INTO users SET username='$username', password='$password', email='$name'";
            echo $sql1;
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
            return $result;
        }else { 
        	return false;
        }
	}

}

?>