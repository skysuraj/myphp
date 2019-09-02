<?php 
session_start();
// echo $_SESSION['user'];
// print_r($_SESSION);exit;
if (time()-$_SESSION['logged_in'] < $_SESSION['valid_for']) {
	//session_start();
	echo "you are valid"; # code...
}
else{
	$_SESSION['error'] = " invalid login";
	header('Location: http://localhost:8888/meghabytes/login.php');
 }
?>