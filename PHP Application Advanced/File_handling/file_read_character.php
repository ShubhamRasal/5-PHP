 <?php

 $myfile = fopen("demo.txt", "r") or die("Unable to open file!");

// Output one character until end-of-file
while(!feof($myfile)) 
{
  echo fgetc($myfile);
}

fclose($myfile);
?> 