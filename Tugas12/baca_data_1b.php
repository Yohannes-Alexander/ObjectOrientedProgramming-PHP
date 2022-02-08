<?php
$myfile = fopen("goods3.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("goods3.txt"));
fclose($myfile);
?>
