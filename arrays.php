<?php 
	// Remove duplicate values in an array
	// Trims blank values in an array
	// Checks if variable exists
	error_reporting(0);
	$array = array('Christian', 'Dean', 'Dean', 'Armada');
	$unique = array_unique($array);
	$trim = array_map('trim', $unique);
	$count = count($trim);
	for($a = 0; $a <= $count; $a++){
		if(!isset($trim[$a])){
			echo "";
		}else{
			echo $trim[$a]. '<br />';
		}
	}
?>