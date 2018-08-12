<?php 
session_start();
include_once 'classes/user.php';

$user = new User();

if(isset($_POST['submit'])){
	$register = $user->register_user($_POST['username'], $_POST['password'], $_POST['email']);

	if($register){
		echo "User is registered";
	}else{
		echo "Registration failed, this username or email is already registered";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | User</title>
</head>
<body>
<h4>Register here:</h4>
<form method="POST" action="">
	<input type="text" name="username" placeholder="Username: ">
	<input type="password" name="password" placeholder="Password: ">
	<input type="email" name="email" placeholder="Email: ">
	<input type="submit" value="Login" name="submit">
</form>
</body>
</html>