<form action="" method="POST">
	<center>
		<h2 style="color: brown">Input Data Mahasiswa</h2>
		<table>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>: <input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>: <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</input>
					 <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>: <select name="prodi">
					<option value="Managemen Informatika">Managemen Informatika</option>
					<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>: <select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FKB">FKB</option>
					<option value="FEB">FEB</option>
					<option value="FTE">FTE</option>
					<option value="FIF">FIF</option>
					<option value="FRI">FRI</option>
					<option value="FIK">FIK</option>
				</select></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>: <input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto Hidup :</td>
				<td> <textarea cols="28" rows="20" name="mottohidup"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="UPDATE"></td>
			</tr>
		</table>
	</center>
</form>
<?php
include 'connect.php';
session_start();
	if(isset($_POST['simpan'])){
	$nama 			= $_POST['nama'];
	$nim 			= $_POST['nim'];
	$jeniskelamin	= $_POST['jeniskelamin'];
	$prodi 			= $_POST['prodi'];
	$fakultas 		= $_POST['fakultas'];
	$asal 			= $_POST['asal'];
	$motto 			= $_POST['mottohidup'];

	echo "<input type='hidden' name='value' value='.$nim.'>";

	if($_POST['simpan']){
	 $queryy = "UPDATE inputmhs SET nim='$nim',nama='$nama',jeniskelamin='$jeniskelamin',prodi='$prodi', fakultas='$fakultas', asal='$asal', mottohidup='$motto' WHERE nim ='$nim'";
	 echo "Berhasil update <a href = 'detail.php'> Klik </a> -> Data Mahasiswa";
	} else{
		echo "ERROR!!";
	}
}
?>