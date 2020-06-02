<?php
//We cannot access global variables inside the functions directly
$var1 = 10;
function MyFun1()
{
	$var1 = 20;
	echo("var1 inside the function: $var1 <br>");
}
MyFun1();
echo("var1 outside the function: $var1 <br>");

//Accessing the global variables inside the functions using global keyword
$var2 = 10;
function MyFun2()
{
	global $var2;
	$var2 = 20;
	echo("var2 inside the function: $var2 <br>");
}
MyFun2();
echo("var2 outside the function: $var2 <br>");


//Another way of accessing the global variables
$var3 = 10;
function MyFun3()
{
	$var3 = $GLOBALS["var3"];
	$var3 = 20;	
	echo("var3 inside the function: $var3 <br>");
}
MyFun3();
echo("var3 outside the function: $var3 <br>");

?>