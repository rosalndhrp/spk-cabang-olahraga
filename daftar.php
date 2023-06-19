<?php
	session_start();
	include 'onek.php';

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['pass'];
	

	$_SESSION['admin']=2;

	$sqldaftar = "INSERT INTO `mitra`VALUES ('','$nama','$username','$password1')";
	$simpan=mysqli_query($dbcon,$sqldaftar);

	if ($simpan) {
	header('location:login2.php');
}
  ?>