<?php 
	$host='localhost';
	$username='root';
	$password='';
	$database='demo';
	$conn=mysqli_connect($host,$username,$password,$database);

		if ($conn) {
			//echo "sucessful";
			# code...
		
				// $query='SELECT * FROM persons LIMIT 1';

				// $result=mysqli_query($conn,$query);

				// $number=mysqli_num_rows($result);

				// if ($number>0) {
				// 	# code...
				// 	while ($row=mysqli_fetch_assoc($result)) {

				// 		//echo $row['user_name']; echo '</br>';
				// 		# code...
				// 	}
				
}


				//$z=$_P
 $query='SELECT * FROM ' .  $_POST['table'] . ' LIMIT '.$_POST['number'];
				//$query='SELECT * FROM persons JOIN brother ON persons.user_id=brother.person_id LIMIT '.$_POST['number'];

				$result=mysqli_query($conn,$query);

				$number=mysqli_num_rows($result);

				if ($number>0) {
					# code...
					while ($row=mysqli_fetch_assoc($result)) {

						echo $row['user_name']; 
						echo $row['name']; 

						echo '</br>';
						# code...
					}
				
}
		


 ?>