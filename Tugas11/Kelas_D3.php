<?php 
require('Kelas_C3.php');

class D implements C{
	private $d;

	public function __construct($d){
		$this->d = $d;
	}

	public function tampilD(){
		echo "Nilai d adalah ".$this->d;
	}

	public function hitungKali($a,$b){
		return $a*$b;
	}

	public function hitungJumlah($a,$b){
		return $a+$b;
	}

	public function hitungKurang($a,$b){
		return $a-$b;
	}
}
?>