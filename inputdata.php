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
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</center>
</form>
<?php
include 'prosesconn.php';
	echo "<a href='menu.php'>Kembali</a>";
?>
<?php
session_start();
if (isset(($_POST['simpan']))) {
	$nim 		= $_POST['nim'];
	
	$data		= mysqli_query($connect, "SELECT * FROM inputmhs WHERE nim = '$nim'");
	$baris 		= mysqli_num_rows($data);

	if (isset($baris)) {
		$_SESSION['nim'] = $nim; 
	}
}
?>