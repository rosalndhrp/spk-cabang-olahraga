<?php

include '../onek.php';

//deklarasi variable dari text field ke field DB, agar mudah mendeklarasikan semua data
	$nisn    = $_POST['nisn'];
    $nama= $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $umur= $_POST['umur'];
    $sekolah = $_POST['sekolah'];
    $idsiswa= $_POST['id'];
   
                                  

$editsiswa="UPDATE siswa SET 				nisn='$nisn',
											nama='$nama',
											kelamin='$kelamin',
											umur='$umur',
											siswa='$sekolah'
											
											 
											 WHERE id_siswa = $idsiswa";
$sql= mysqli_query($dbcon,$editsiswa);
var_dump($editsiswa);
if($sql!=true){
	echo "gagal";
}
else{
	header('location:../alternatif.php');
}

?>