<?php
$servername = "localhost";
$username = "";
$password = "";


//Creating Connection:

$conn = @mysql_connect($servername,$username,$password);

if(!$conn)
{
echo("Conn:Failed");
}
else
{
echo("Conn:Done");
}

//Selecting Database:

$db = "test";

if(!mysql_select_db($db))
{
echo("SelectDb: Failed");
}
else
{
echo("SelectDb: Done");
}
echo "<br/>";

//Inserting Value into DB:
$name = $_GET['name'];
$query = "insert into Student(stud_name) values ('$name')";

$result = mysql_query($query,$conn);
if(!$result)
{
echo("Insert: Failed");
}
else
{
echo("Insert: Done");
}

?>