<?php 
	$title_fields = array('dateinput','source','availabledate','unit','stno','stname','sttype','suburb','State','Postcode');
    // display field/column names as first row
    echo implode(",", $title_fields) . "\r\n".'<br />';
    $dean = 'dean';
    $invalid_data[0] = array($dean, 'Christian', 'Armada');
    $invalid_data[1] = array('Jae', 'Vernon', 'Aquino');
    $invalid_data[2] = array('Shab', 'Shabie', 'De Luna');
    $invalid_data[3] = array('Angel', 'Umali', 'Cid');

    for($a=0;$a<=3;$a++){
 		echo implode(",", $invalid_data[$a]) . "\r\n".'<br />';
 	}
 	include('try.php');
?>