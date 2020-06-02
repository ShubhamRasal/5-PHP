 <?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Marvellous Infosystems";

fwrite($myfile, $txt);

$txt = "Educating for better tomorrow\n";

fwrite($myfile, $txt);

fclose($myfile);
?> 