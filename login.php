<?php
session_start()

if(isset($_POST)){
	// todo check the login salt etc if it matches maybe make a class for it
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User | Login</title>
</head>
<body>
<h4>Login: </h4>
<form>
	<input type="text" name="email" placeholder="Email: ">
	<input type="password" name="password" placeholder="Password: ">
	<input type="submit" value="Login">
</form>
</body>
</html>