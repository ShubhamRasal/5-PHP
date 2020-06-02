 <?php
function fun() 
{
    static $x = 0;
    echo $x;
    $x++;
}

fun();
fun();
fun();
?> 