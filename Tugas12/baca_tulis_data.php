<?php
$myfile = fopen("goods3.txt", "r") or die("Unable to open file!");
$filecopy = fopen("output_hasil.txt","w");
// Output one line until end-of-file
while(!feof($myfile)) {
  fwrite($filecopy, fgets($myfile));
}
fclose($myfile);
?>
