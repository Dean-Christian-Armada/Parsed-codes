<?php
	$path = $_SERVER['PHP_SELF']; 
	$page = basename($path); 
	$page = basename($path, '.php');
	echo $page;
?>