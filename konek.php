<?php
	$s = "sql300.epizy.com";
	$u = "epiz_26814537";
	$p = "sipboga123";
	$db= "epiz_26814537_dbsipboga";
	

	$dbcon=mysqli_connect($s,$u,$p,$db);

	if (!$dbcon) {
		die("Gagal ke DataBase : ".mysqli_connect_error());
	}else{
		
	}
?>