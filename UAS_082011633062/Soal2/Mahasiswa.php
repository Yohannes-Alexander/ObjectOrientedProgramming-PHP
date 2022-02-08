<?php 
require('WargaUniversitas.php');

class Mahasiswa extends WargaUniversitas{
	private $nim;
	private $jurusan;

	public function __construct($nim,$nama,$alamat,$jurusan){
		parent::__construct($nama,$alamat);
		$this->nim = $nim;
		$this->jurusan = $jurusan;
	}

	public function setNim($nim){
		$this->nim = $nim;
	}

	public function setJurusan($jurusan){
		$this->jurusan = $jurusan;
	}

	public function getNim(){
		return $this->nim;
	}

	public function getJurusan(){
		return $this->jurusan;
	}
}

?>