<?php
require('Kelas_C1.php');

echo "This is object of c"."<br/> <br/>";
$objC = new C(10);
$objC->tampilBC();
$objC->tampilConstNilaiB();
echo "<br/>";
echo "Hasil kali a dan b adalah ".$objC->hitungKali(10,20);
echo "<hr/>";

?>