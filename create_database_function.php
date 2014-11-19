<?php
// Creates database function via PHP
/*
$username="root";
$password="";
$database="test";

// Opens a connection to a mySQL server
$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {
  die("Not connected : " . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ("Can\'t use db : " . mysql_error());
}

$query = "
CREATE FUNCTION CAP_FIRST (input VARCHAR(255))

RETURNS VARCHAR(255)

DETERMINISTIC

BEGIN
DECLARE len INT;
DECLARE i INT;

SET len   = CHAR_LENGTH(input);
SET input = LOWER(input);
SET i = 0;

WHILE (i < len) DO
    IF (MID(input,i,1) = ' ' OR i = 0) THEN
        IF (i < len) THEN
            SET input = CONCAT(
                LEFT(input,i),
                UPPER(MID(input,i + 1,1)),
                RIGHT(input,len - i - 1)
            );
        END IF;
    END IF;
    SET i = i + 1;
END WHILE;

RETURN input;
END;
";

$dean = mysql_query($query);
$dean = mysql_real_escape_string($dean);

if($dean){
	echo "<script>alert('dean');</script>";
}else{
	echo "<script>alert('armada');</script>";
}
*/
?>