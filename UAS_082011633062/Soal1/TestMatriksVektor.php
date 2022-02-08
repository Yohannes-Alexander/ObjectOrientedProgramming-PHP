<?php  
include 'Vektor.php';

$m = new Matriks();
echo "Matriks M <br>";
$m->displayMatriks();
echo"<br>";

$col = readline('INGIN DIURUTKAN DARI KOLOM = ');
$col = 2;

$v = new Vektor(null,null,$m,$col);
echo "VEKTOR V <br>";
echo "V = ";
$v->display();
echo "<br>";

$v_urut = $v->sortVektor($v);
echo "VEKTOR V YANG SUDAH DIURUTKAN <br>";
echo "V_URUT ";
$v_urut->display();
echo "<br>";

$v_indeks = $v->indeks_urut_vektor($v);
echo "VEKTOR YANG BERISI INDEKS DARI VEKTOR V_URUT <br>";
echo "V_Indeks = ";
$v_indeks->display();
echo "<br><br>";

$n = $m->urut_matriks($m,$v_indeks);
echo "MATRIKS N YANG MERUPAKAN MATRIKS M YANG DIURUTKAN DARI KOLOM $col <br>";
$n->displayMatriks();

?>