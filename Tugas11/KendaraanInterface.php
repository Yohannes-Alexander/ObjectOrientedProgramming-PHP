<?php 
interface KendaraanInterface{
	public function get_bahan_bakar();
}

abstract class Kendaraan{
	private $jenis;

	public function set_bahan_bakar($jenis){
		$this->jenis = $jenis;
	}

	public function get_bahan_bakar(){
		return $this->jenis;
	}
}

class bus extends Kendaraan implements KendaraanInterface{
}

class pesawat extends Kendaraan implements KendaraanInterface{
}

class kapal extends Kendaraan implements KendaraanInterface{
}

$bus = new bus();
$bus->set_bahan_bakar('Solar');

$pesawat = new pesawat();
$pesawat->set_bahan_bakar('Avtur');

$kapal = new kapal();
$kapal->set_bahan_bakar('Solar');

echo $bus->get_bahan_bakar();
echo "<hr/>";
echo $pesawat->get_bahan_bakar();
echo "<hr/>";
echo $kapal->get_bahan_bakar();
echo "<hr/>";
?>
