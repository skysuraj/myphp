<?php 
// $str=5;
// $var=array(1,2,3 );
// echo "$str";
// echo "<pre>";
// print_r($var);
// $associative = array(
	// 'maths' =>100,
	// 'science' => 90,
	// 'eph' =>99 
	// );
// echo "<pre>";
// print_r($associative);
// echo $associative['science'];

$associative = array(
	'math' => array(
			'theory' =>20,
			'practical' =>  50,
	),
	'eph' => array (
			'theory' => 40,
			'practical' => 40,
	),
	'science' => array (
				'theory' => 20,
				'practical' => 30,
	)
 );
echo "<pre>";
print_r($associative);
echo $associative ['science']['theory'];
echo "<br>";
echo $associative ['math']['practical'];
 ?>
