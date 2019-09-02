<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$con = mysqli_connect($host, $username, $password, $database);

if ($con) {
	$query = 'SELECT  persons.name as pname,brother.name  as bname FROM persons JOIN brother ON persons.id=brother.id' ;
	$rows = mysqli_query($con, $query);
	$number = mysqli_num_rows($rows);
	if ($number>0) { ?>
		<table>
	<tr>
		<th>person name</th>
		<th>brother name</th>
	</tr>
		<?php while ($row=mysqli_fetch_assoc($rows)) {?>
			<!-- // echo $row['pname'].'&nbsp';
			// echo $row['bname'];
			// echo '<br>'; -->
			
	<tr>
		<td><?php echo $row['pname'].'&nbsp'; ?></td>
		<td><?php echo $row['bname']; ?></td>
	</tr>


		<?php }
		echo '</table>';
	 }
}
else {
	echo "fail";
}
?>
