<?php 
	// Reference: http://php.about.com/od/learnphp/ht/phpredirection.htm
	$date = date('F d Y');
	echo $date.'<br />';
	if($date == "August 27 2014"){
		header('Location: index.html');
	}else{
		echo 'armada';
	}
	echo 'Hello World';
?>