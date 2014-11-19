<?php
	// Note make sure the page came from a redirect for a valid referer

	// Reference: http://php.net/manual/en/reserved.variables.server.php
	//echo $_SERVER['HTTP_REFERRER'];

	// Reference: http://php.net/manual/en/function.getallheaders.php
	/*foreach (getallheaders() as $name => $value) {
	    echo "$name: $value\n";
	}*/

	// Reference: http://php.net/manual/en/function.parse-url.php
	$http_referer = $_SERVER['HTTP_REFERER'];
	$http_referer = parse_url($http_referer);
	echo $http_referer["scheme"];
	echo $http_referer["host"];
	echo $http_referer["user"];
	echo $http_referer["pass"];
	echo $http_referer["path"];
	echo $http_referer["query"];
	echo $http_referer["fragment"];

?>