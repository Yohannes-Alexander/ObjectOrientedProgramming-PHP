<?php 
require('Kelas_A2.php');
require('Kelas_B2.php');

class C extends B implements A{
	private $c;

	public function __construct($b,$c){
		parent::__construct($b);
		$this->c = $c;
	}

	public function tampilBC(){
		echo "Nilai b adalah ".$this->getB();
		echo "<br/>";
		echo "Nilai c adalah ".$this->c;
		echo "<br/>";
	}

	public function tampilConstNilaiB(){
		echo "Nilai konstanta B adalah ".$this::NILAI_B;
	}

	public function hitungKali($a,$b){
		return $a*$b;
	}
}
?>