<?php
// http://bytes.com/topic/php/insights/889606-setting-timeout-php-sessions
session_start();
$timeout = 60; // Number of seconds until it times out.
 
// Check if the timeout field exists.
if(isset($_SESSION['timeout'])) {
    // See if the number of seconds since the last
    // visit is larger than the timeout period.
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
    	session_destroy();
    	header('Location: ../expired');
    }
?>