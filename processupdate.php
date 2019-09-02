<?php 
	$host='localhost';
	$username='root';
	$password='';
	$database='demo';
	$conn=mysqli_connect($host,$username,$password,$database);

		if ($conn) {
				
}			
 $query="UPDATE persons SET `address`=" . "'". $_POST['address']. "'" . " WHERE id= 3 ";
 				echo $query;
				mysqli_query($conn,$query);

?>