 <?php
 
	$fp = fopen("webdictionary.txt", "r");
	echo fread($fp,filesize("webdictionary.txt"));
	fclose($fp);

?> 