<?php
    /* First method to associate create array. */
    $salaries = array("amit" => 2000, "tushar" => 1000, "sagar" => 500);

	foreach($salaries as $x => $x_value)
	{
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}
	
?>