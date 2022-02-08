<?php  
require('Kelas_D3.php');

$objD = new D(90);
echo "This is object of D"."<br/><br/>";
$objD->tampilD();
echo "<br/>";
echo "The result of multiply of a and b is ".$objD->hitungKali(10,20);
echo "<br/>";
echo "The result of subraction of a and b is ".$objD->hitungKurang(10,20);
echo "<br/>";
echo "The result of addition of a and b is ".$objD->hitungJumlah(10,20);
echo "<br/>";
?>
