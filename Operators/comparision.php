<?php

$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal

$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal

$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal data types
?>