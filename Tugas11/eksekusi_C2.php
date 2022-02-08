<?php
require('Kelas_C2.php');

echo "This is object of c"."<br/> <br/>";
$objC = new C(20,10);
$objC->tampilBC();
$objC->tampilConstNilaiB();
echo "<br/>";
echo "Hasil kali a dan b adalah ".$objC->hitungKali(10,20);
echo "<hr/>";
?>