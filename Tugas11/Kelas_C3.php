<?php  
require('Kelas_A3.php');
require('Kelas_B3.php');
interface C extends A,B {
	public function hitungJumlah($a,$b);
}
?>