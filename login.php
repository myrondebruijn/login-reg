<?php
session_start();
include_once 'classes/user.php';

$user = new User();

if(isset($_POST)){
	$login = $user->check_login($_POST['email'], $_POST['password']);

	if($login){
		echo "Correct information";
	}else{
		echo "False information";
	}

	echo "<br>Session user: ". $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User | Login</title>
</head>
<body>
<h4>Login: </h4>
<form method="POST" action="">
	<input type="text" name="email" placeholder="Email: ">
	<input type="password" name="password" placeholder="Password: ">
	<input type="submit" value="Login">
</form>
</body>
</html>