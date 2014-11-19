<?php 
	$chosen_option = "NSW";
	$array_option = $option, 'NSW', 'QLD', 'SA', 'VIC', 'WA');
	$unique = array_unique($array_option);
	$trim = array_map('trim', $unique);
	$count_option = count($trim);
	for($option = 0; $option <= $count_option; $option++){
		if(!isset($trim[$option])){
			echo "";
		}else{
			echo "<option>".$trim[$option].'</option>';
		}
	}
?>