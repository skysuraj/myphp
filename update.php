<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$con = mysqli_connect($host, $username, $password, $database);
$query="UPDATE persons SET address='shankarpur' WHERE id='3'
";
mysqli_query($con, $query);
// update helps to chage

?>