<?php
$servername = "localhost";
$username = "";
$password = "";

//Creating connection with the database:

$conn = @mysql_connect($servername,$user,$password) or die("Failed");
$db = "test";

// Check connection
if (!$conn) {
    die("Connection failed: ");
} 
echo "Connected successfully";
echo "<br>";

$selectStatus = mysql_select_db($db,$conn);

// Check select status
if (!$selectStatus) {
    die("Selection failed: ");
} 
echo "Selected successfully";
echo "<br>";

?>