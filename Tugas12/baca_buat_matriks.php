<?php  
class BuatMatriks{
	public $row;
	public $column;
	public $elemen;

	public function __construct(){
		$this->row = 0;
		$this->column = 0;
	}

	public function __destruct(){
		echo "The matrix is successful with row {$this->row} and column {$this->column}";
	}

	public function bacaData($filedata){
		$myfile = fopen($filedata, "r") or die("Unable to open file!");
		$hasil = fread($myfile, filesize($filedata));
		fclose($myfile);
		return $hasil;

	}

	public function buatVektorData($filedata){
		$data = $this->bacaData($filedata);
		$p=strlen($data);
		$j=0;
		$angka=array();
		for($i=0;$i<$p;$i++){
		   $temp=substr($data,$i,1);
		   if($temp==" " || $temp=="\n" || $temp=="\t" || $temp=="\r") {
		    if($j!=0) $angka[]=substr($data,$i-$j,$j);
		    $j=0;;
		    }
		    else {
		         $j++;
		         if($i==$p-1) $angka[]=substr($data,$i-$j+1,$j);         
		         }    
		}

		$vekt = $angka;
		echo "data yang di baca : <br \>";
		$n=count($vekt); //count utk mengetahui banyaknya elemen vektor
		for($i=0;$i<$n;$i++) echo $vekt [$i]." ";
		echo " <br \>";
		return $vekt;
	}

	public function buatMatriksData($filedata){
		$vekt = $this->buatVektorData($filedata);
		$this->row = $vekt[0];
		$this->column = $vekt[1];
		$matriks = array();
		$idx=0;
		$baris = array();
		for ($i = 0;$i<$this->column;$i++){
			$baris[] = 0;
		}
		for($i=0;$i<$this->row;$i++){
			for($j=0;$j<$this->column;$j++){
				if($i==0){
					$idx=$j+2;
				}
				else{$idx = $idx+1;}
				$baris [$j] = $vekt [$idx];
			}
			$matriks[] =$baris;
		}

		echo "Elemen Matriks"."</br>";
		for($i=0;$i<$this->row;$i++){
			for($j=0;$j<$this->column;$j++){
				echo $matriks[$i][$j]."</hr> </hr>";
			}
			echo "</br>";
		}

		$this->elemen = $matriks;
		return $matriks;
	}

}
?>

