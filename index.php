<?php
session_start();

if($_SESSION['email'] != ""){

}else{
	header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
</head>
<body>
<p>You are logged in under: <?php echo $_SESSION['email']; ?></p>
</body>
</html>