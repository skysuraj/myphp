<?php 
$username="suraj";
$password="admin";
if ($username==$_POST['username'] && $password==$_POST['password']) {
	 session_start() ;
	 if ($_POST['rememberme']==1) {
	 	$login_time= time();
	 	$_SESSION['logged_in']=$login_time;
	 	$_SESSION['valid_for']=30; # code...
	 }
else{
	 	$login_time= time();
	 	$_SESSION['logged_in']=$login_time;
	 	$_SESSION['valid_for']=12; # code...
 }
	 $_SESSION['user']=$username;
	 header('Location: http://localhost:8888/meghabytes/dashboard.php'); # code...
}
else{
	session_start();
	$_SESSION['error'] = " invalid login";
	header('Location: http://localhost:8888/meghabytes/login.php');
}
 ?>

