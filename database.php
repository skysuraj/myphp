<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$con = mysqli_connect($host, $username, $password, $database);

if ($con) {
	echo "successful";
}
else {
	echo "fail";
}
?>