<?php  
include('Mahasiswa.php');

class Universitas{
	private static $namaUniversitas;
	private $mahasiswa;
	private $incrementalId;

	public function __construct($namaUniversitas){
		Universitas::$namaUniversitas = $namaUniversitas;
		$this->mahasiswa = array();
		$this->incrementalId = 1;
	}

	public static function setNamaUniversitas($namaUniversitas){
		$Universitas->namaUniversitas = $namaUniversitas;
	}

	public static function getNamaUniversitas(){
		return Universitas::$namaUniversitas;
	}

	public function getIncrementalId(){
		return $this->incrementalId;
	}

	public function addMahasiswa($mahasiswa){
		array_push($this->mahasiswa,$mahasiswa);
		$this->incrementalId = $this->incrementalId + 1;
	}

	public function removeMahasiswa($nim){
		for($i=0;$i<count($this->mahasiswa);$i++){
			if($this->mahasiswa[i]==$nim){
				unset($this->mahasiswa[i]);
			}
		}
	}

	public function getTotalStudent(){
		return count($this->mahasiswa);
	}

	public function displayMahasiswa(){
		for($i=0;$i<count($this->mahasiswa);$i++){
			echo "Mahasiswa : ".($i+1)."<br>";
			echo "NIM : ".$this->mahasiswa[$i]->getNim()."<br>";
			echo "Nama : ".$this->mahasiswa[$i]->getNama()."<br>";
			echo "Alamat : ".$this->mahasiswa[$i]->getAlamat()."<br>";
			echo "Jurusan : ".$this->mahasiswa[$i]->getJurusan()."<br>";
			
		}
	}
}
?>