<?php  
class WargaUniversitas{
	private $nama;
	private $alamat;

	public function __construct($nama, $alamat){
		$this->nama = $nama;
		$this->alamat = $alamat;
	}

	public function setAlamat($alamat){
		$this->alamat = $alamat;
	}

	public function setNama($nama){
		$this->nama = $alamat;
	}

	public function getNama(){
		return $this->nama;
	}

	public function getAlamat(){
		return $this->alamat;
	}

}
?>