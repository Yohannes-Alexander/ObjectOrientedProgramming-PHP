<?php  
include('Universitas.php');


echo "WELCOME TO COLLEGE DATA INPUT APPLICATION <br>";
$namaUniv = readline('enter name : ');
$university1 = new Universitas("Unair");
echo "University name :  ".$university1->getNamaUniversitas()."<br><br>";
echo "INPUT DATA STUDENT <br>";
while (true) {
	echo "Student ID : ".$university1->getIncrementalId()."<br><br>";
	$name = readline("INPUT STUDENT NAME : ");
	$address = readline("INPUT ALAMAT NAME :");
	$major = readline("INPUT MAJOR NAME : ");
	$major = '61';
	switch ($major) {
		case '61':
			$major = 'MATEMATIKA';
			break;
		case '62':
			$major = 'BIOLOGI';
			break;
		case '63':
			$major = 'KIMIA';
			break;
		case '64':
			$major = 'FISIKA';
			break;
		case '65':
			$major = 'TEKNIK INFORMATIKA';
			break;
		case '66':
			$major = 'TEKNIK ARSITEKTUR';
			break;
		
		default:
			echo "NOT FOUND";
			break;
	}
	$university1->addMahasiswa(new Mahasiswa($university1->getIncrementalId(),'Yohannes','Bekasi',$major));
	$control = readline('"DO YOU WANT TO ADD ANOTHER INPUT ? (Y/N) :');
	$control = 'N';
	if($control=='N'){
		echo "<br> INFORMATION STUDENT <br>The total of inputted Student Data is ".$university1->getTotalStudent()." students <br>";
		echo "STUDENT DATA<br>";
		$university1->displayMahasiswa();
		break;

	}

}

?>