<?php
include ('connect.php');
?>
<form action="" method="POST">
	<table>
		<tr>
			<td>
		<a href="inputdata.php">Input Data Mahasiswa</a> 
			</td>
		</tr>
		<tr>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td><input type="submit" name="search" value="Search"></td>
		</tr>
	</table>
</form>
<?php
session_start();
if (isset(($_POST['search']))) {
	$nim 		= $_POST['nim'];

	$data		= mysqli_query($connect, "SELECT * FROM inputmhs WHERE nim = '$nim'");
	$baris 		= mysqli_num_rows($data);

	if (isset($baris)) {
		$_SESSION['nim'] = $nim; 
		header("location: datamahasiswa.php");
	}
}