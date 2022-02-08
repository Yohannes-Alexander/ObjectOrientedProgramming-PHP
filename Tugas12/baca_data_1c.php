<?php  
$myfile = fopen("goods3.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>