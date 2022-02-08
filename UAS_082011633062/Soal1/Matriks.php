<?php  

class Matriks{
	private $elemen ; 
	private $row;
	private $col;

	public function __construct($elemen=null,$row=null,$col=null){
		if($elemen!=null && $row!=null && $col != null){
			$this->elemen = clone $elemen;
			$this->row = $row;
			$this->col = $col;
		} elseif ($row!=null && $col != null) {
			$this->row = $row;
			$this->col = $col;
			$this->elemen = array();
			for ($i=0; $i < $this->row ; $i++) { 
				$arr = array();
				for ($j=0; $j < $this->col; $j++) { 
					array_push($arr, random_int(1, 20));
				}
				array_push($this->elemen, $arr);
			}
		}
		else{
			$this->row = 4;
			$this->col = 3;
			$this->elemen = array(array(3,4,6),array(1,7,2),array(5,11,8),array(2,9,14));
		}
	}

	public function getElemen($row, $col){return $this->elemen[$row][$col];}
	public function getRow(){return $this->row;}
	public function getCol(){return $this->col;}
	public function setRow($row){$this->row = $row;}
	public function setCol($col){$this->col = $col;}
	public function setElemen($row,$col,$elemen){$this->elemen[$row][$col]=$elemen;}
	public function urut_matriks($m, $v_indeks){
		$n = new Matriks();
		$n->setRow($m->getRow());
		$m->setCol($m->getCol());

		for ($j=0; $j < $m->getRow() ; $j++) { 
			for ($k=0; $k < $m->getCol() ; $k++) { 
				$n->setElemen($j,$k,$m->getElemen($v_indeks->getElemen($j),$k));
			}
		}
		return $n;
	}
	public function displayMatriks(){
		for ($i=0; $i < $this->row ; $i++) { 
			for ($j=0; $j < $this->col; $j++) { 
				echo $this->elemen[$i][$j]." ";
			}
			echo "<br>";
		}
	}

}
?>