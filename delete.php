	<a href="datamahasiswa.php">Kembali</a>
<?php
include 'connect.php';
session_start();

	if(isset($_POST['nim'])){

    $nim 	= $_POST['nim'];
	$sql	="DELETE FROM inputmhs WHERE nim =" .$_POST['nim'];
	$result	= mysqli_query($sql);
           echo "<strong>Contact Has Been Deleted</strong><br/><br/>";

 	} else { 
           echo "<strong>Deletion Failed</strong><br/><br/>";
    }
?>