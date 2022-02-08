<?php  
include 'Matriks.php';
class Vektor{

	private $elemen;
	private $size;

	public function __construct($elemen=null,$size=null,$matriks=null,$col=null){
		if($size!=null){
			$this->size = $size;
			$this->elemen = array();
		}
		elseif ($elemen!=null) {
			$this->elemen =  $elemen;
			$this->size = count($this->elemen);
		}
		else{
			$this->elemen = array();
			$this->size = $matriks->getRow();
			for($i=0;$i<$this->size;$i++){
				$this->elemen[$i]=$matriks->getElemen($i,$col-1);
			}
		}
	}

	public function getSize(){
		return $this->size;
	}

	public function getElemen($indeks){
		return $this->elemen[$indeks];
	}

	public function getElemenAll(){
		return $this->elemen;
	}

	public function setElemen($indeks, $elemen){
		$this->elemen[$indeks]=$elemen;
	}

	public function setElemenAll($elemen){
		$this->elemen = clone $elemen;
	}

	public function setSize($size){
		$this->size = $size;
	}

	public function display(){
		for($i=0;$i<$this->size;$i++){
			if($i==0){
				echo "( ".$this->elemen[$i].", ";
			}
			elseif ($i == $this->size-1) {
				echo $this->elemen[$i]." )";
			}
			else{
				echo $this->elemen[$i].", ";
			}
		}
	}

	public function sortVektor($v){
		$copy = new Vektor($v->getElemenAll());
		for ($i=0; $i < $v->getSize()-1; $i++) { 
			for ($j=$i; $j < $v->getSize(); $j++) { 
				if ($copy->getElemen($i)>$copy->getElemen($j)) {
					$k=$copy->getElemen($i);
					$copy->setElemen($i,$copy->getElemen($j));
					$copy->setElemen($j,$k);
				}
			}
		}
		return $copy;
	}

	public function indeks_urut_vektor($v){
		$v_indeks = new Vektor(null,$v->getSize());
		$v_urut = $this->sortVektor($v);
		$indeks = 0;
		for ($i=0; $i < $v_indeks->getSize(); $i++) { 
			for ($j=0; $j < $v_indeks->getSize(); $j++) { 
				if ($v->getElemen($j)==$v_urut->getElemen($i)) {
					$v_indeks->setElemen($indeks,$j);
					$indeks = $indeks+1;
					continue;
				}
			}
		}
		return $v_indeks;
	}
}
?>