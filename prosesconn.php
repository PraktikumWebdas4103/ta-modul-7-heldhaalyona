<?php
include 'connect.php';

 	if(isset($_POST['simpan'])){
	$nama 			= $_POST['nama'];
	$nim 			= $_POST['nim'];
	$jeniskelamin	= $_POST['jeniskelamin'];
	$prodi 			= $_POST['prodi'];
	$fakultas 		= $_POST['fakultas'];
	$asal 			= $_POST['asal'];
	$motto 			= $_POST['mottohidup'];

	$sql = "INSERT INTO inputmhs (nama,nim,jeniskelamin,prodi,fakultas,asal,mottohidup) values ('$nama','$nim','$jeniskelamin','$prodi','$fakultas','$asal','$motto')";
	if (mysqli_query($connect, $sql)){
		echo "<a href = 'datamahasiswa.php'> Klik </a> -> Datamhs";
	}else{
		echo "ERROR" .$sql. "<br>" .$connect -> error;
	}
	}
?>