<?php
// Reference: http://samy.pl/phpwn/

session_start();

echo "Hi $_SERVER[REMOTE_ADDR]! The time is " . time() . "<p>";

echo "To test breaking the seed, run the following (after compiling <a href='s1s2.c'>s1s2.c</a>)<br>";

echo "<code>time <a href='s1s2.c'>./s1s2</a> " . getmypid() . " " . lcg_value() . "</code><p>";

echo "Can you guess my next lcg_value based off the above? (hint: it's " . lcg_value() . ").<br>";
echo "Test by running: <code>time <a href='lcg-state-forward.c'>./lcg-state-forward</a> [s1] [s2] 100</code><p>";

echo "Your <a href='http://www.test.com/search?q=" . session_id() . "'>session_id</a> is " . session_id() . " (or just look at your cookie)";

?>