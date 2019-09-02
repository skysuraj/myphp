<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$con = mysqli_connect($host, $username, $password, $database);
$query="INSERT INTO persons(`name`,`address`,`email`) VALUES('smack','brtt','proe@gmail.com'),('nicon','ktt','proen@gmail.com')";
mysqli_query($con, $query);
// insert helps to insert new
?>