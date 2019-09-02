<?php 
$futuretime='15:59:00';
$currenttime= date('H:i:s');
if ($futuretime-$currenttime > 700) {
	echo" five minutes have been passed";# code...
	} else{
		echo "error";
	}
 ?>