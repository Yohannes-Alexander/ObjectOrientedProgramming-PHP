<?php 
require('Kelas_A1.php');
require('Kelas_B1.php');

class C implements A{
	private $c;

	public function __construct($c){
		$this->c = $c;
	}

	public function tampilBC(){
		$objB = new B(10);
		echo "Nilai b adalah ".$objB->getB();
		echo "<br/>";
		echo "Nilai c adalah ".$this->c;
		echo "<br/>";
	}

	public function tampilConstNilaiB(){
		$objB = new B(10);
		echo "Nilai konstanta B adalah ".$objB::NILAI_B;
	}

	public function hitungKali($a,$b){
		return $a*$b;
	}
}
?>