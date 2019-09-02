<?php 
session_start();
$_SESSION['test']=10;
echo $_SESSION['test'];
unset($_SESSION ['test']);
 ?>