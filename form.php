<?php 
// if (isset($_POST) && !empty($_POST)) {
// 	echo $_POST['Tittle'];
//  echo $_POST['Age'];
//  echo $_POST['Height'];# code...

// if (isset($_POST) && !empty($_POST)) {
// 	echo $a= $_POST['digit1'] + $_POST['digit2']; # code...
// }
 
 // $_POST['operation'];
 if (isset($_POST) && !empty($_POST)) {
 	$digit1 = $_POST['digit1'];  
        $digit2 = $_POST['digit2'];  
        $Add =  $digit1+$digit2;
        $Substract =  $digit1-$digit2;   
        if ($_POST['operation']==1) {
          echo "The sum of $digit1 and $digit2 is: ".$Add;	# code...
          }  
else{
echo "The substraction of $digit1 and $digit2 is: ".$Substract;	
}
   
 	# code...
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="digit1" placeholder="Tittle"><br>
		<input type="text" name="digit2" placeholder="Sex"><br>
		<select name="operation">
			<option value="1">Add</option>
			<option value="2">Subtract</option>
		</select>
		<input type="checkbox" name="rememberme" value="1"> remember me<br>
		<input type="submit" value="submit">

	</form>
</body>
</html>