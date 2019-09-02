<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$con = mysqli_connect($host, $username, $password, $database);
$query="DELETE FROM persons WHERE id='2'";
mysqli_query($con, $query);

?>