 <?php
$myfile = fopen("demo.txt", "r");

// Output one line until end-of-file
while(!feof($myfile))
{
  echo fgets($myfile) . "<br>";
}

fclose($myfile);
?> 