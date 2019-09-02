<?php 
$test ='hello';
// if (isset($test)&& !empty($test)) {
// 	echo "set";
// }
//  else {

//  	echo "not set";
// 	# code...
// }
	# code...
 ?>
 <!-- isset checks value is set or not -->

 <?php 
$people = array(
	'white' => 'ram', 
	'black' => 'shyam',
	'none' => '',
	);
if (isset($people) && !empty($people ['none'] ) ){
	 echo "$ not set";  # code...
}
else {
	echo "set";
}
  ?>
