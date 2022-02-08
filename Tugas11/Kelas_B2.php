<?php 
class B{
	const NILAI_B = 60;
	public $b;

	public function __construct($b){
		$this->b = $b;
	}

	public function getB(){
		return $this->b;
	}

	public function hitungKurang($a,$b){
		return $a-$b;
	}
}
?>