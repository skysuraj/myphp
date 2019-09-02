<?php 
$ram = array(
	'math' => 50,
	'science' => 90,
	'eph' => 60,
 );
 // echo count($ram);
 ?>
 <table>
 	<tr>
<?php foreach ($ram as $key => $value) { ?>
	<td> <?php echo "$key"; ?></td>
 <?php } ?>
 	</tr>
 	<tr>
 		<?php foreach ($ram as $value) { ?>
 		<td><?php echo "$value"; ?></td>
 	<?php } ?>
 	</tr>
 </table>