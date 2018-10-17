<?php
include 'connect.php';
session_start();
?>
<form action="" method="POST">
	<center>
		<h2>DATA MAHASISWA</h2>
		<table border="2" cellpadding="2" bgcolor="skyblue">
			<?php
				$nim 			= $_SESSION['nim'];
				$post	 		= mysqli_query($connect, "SELECT * FROM inputmhs WHERE nim = '$nim'");
				$baris 			= mysqli_num_rows($post);

				if($baris > 0){
				while ($fetch = mysqli_fetch_array($post)) {
			?>
		<tr>
			<th>NAMA MAHASISWA</th>
			<th>NIM MAHASISWA</th>
			<th>AKSI</th>
		</tr>
		<tr>
			<td><?php echo $fetch[0]; ?></td>
			<td><?php echo $fetch[1]; ?></td>
			<td> <a href='update.php'>EDIT</a>
			</td>
		</tr>
		</table>
	<?php } ?>
	<?php } ?>
	</center>
</form>
