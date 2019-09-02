<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
		<?php 
		session_start();
		echo $_SESSION['error'];
		unset($_SESSION['error'])
		 ?>
<form method="POST" action="checklogin.php">

		<input type="text" name="username" placeholder="UserNAme"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="checkbox" name="rememberme" value="1"> Remember me<br>
		<input type="submit" value="submit">

</form>
</body>
</html>