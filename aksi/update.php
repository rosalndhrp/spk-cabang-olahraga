<?php

include '../onek.php';

//deklarasi variable dari text field ke field DB, agar mudah mendeklarasikan semua data
	$nisn    = $_POST['nisn'];
    $ltbt= $_POST['ltbt'];
    $lt = $_POST['lt'];
     $lbb= $_POST['lbb'];
    $lk = $_POST['lk'];
    $l40m = $_POST['l40m'];
    $mft = $_POST['mft'];

                                  
$cabang = null;
if ($ltbt == 5  && $lt == 4 && $lbb==4 && $lk== 4 && $l40m== 4 && $mft == 4) {
$cabang = "ANGGAR ";
}

elseif ($ltbt == 3 && $lt == 5 && $lbb == 5 && $lk == 2 && $l40m == 2 && $mft == 1)
{
        $cabang = "ANGKAT BESI";
}
elseif ($ltbt == 5 && $lt == 4 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 4)
{
        $cabang = "BASEBALL";
}
elseif ($ltbt == 5 && $lt == 5 && $lbb == 5 && $lk == 4 && $l40m == 4 && $mft == 4)
{
        $cabang = "BOLA BASKET";
}
elseif ($ltbt == 5 && $lt == 4 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 4)
{
        $cabang= "BOLA TANGAN";
}
elseif ($ltbt == 5 && $lt == 4 && $lbb == 5 && $lk == 4 && $l40m == 4 && $mft == 4)
{
       $cabang = "BOLA VOLI";
}
elseif ($ltbt == 5 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 5 && $mft == 5)
{
       $cabang  = "BULU TANGKIS";
}
elseif ($ltbt == 3 && $lt == 5 && $lbb == 5 && $lk == 2 && $l40m == 4 && $mft == 4)
{
    $cabang = "DAYUNG";
}
elseif ($ltbt == 5 && $lt == 4 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
{
    $cabang = "HOKI";
}
elseif ($ltbt == 1 && $lt == 3 && $lbb == 1 && $lk == 2 && $l40m == 2 && $mft == 5)
{
    $cabang  = "JALAN";
}
elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 2 && $mft == 3)
{
   $cabang   = "JUDO";
}
elseif ($ltbt == 3 && $lt == 3 && $lbb == 5 && $lk == 2 && $l40m == 3 && $mft == 4)
{
   $cabang = "KANO";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
{
    $cabang = "KARATE-DO,KUNGFU,PENCAK SILAT";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
{
     $cabang  = "KUNG FU";
}
elseif ($ltbt == 1 && $lt == 5 && $lbb == 3 && $lk == 4 && $l40m == 5 && $mft == 2)
{
     $cabang = "LARI CEPAT";
}
elseif ($ltbt == 1 && $lt == 3 && $lbb == 1 && $lk == 3 && $l40m == 4 && $mft == 5)
{
     $cabang = "LARI JARAK JAUH";
}
elseif ($ltbt == 3 && $lt == 5 && $lbb == 1 && $lk == 5 && $l40m == 5 && $mft == 2)
{
     $cabang = "LARI GAWANG";
}
elseif ($ltbt == 2 && $lt == 5 && $lbb == 2 && $lk == 3 && $l40m == 4 && $mft == 2)
{
   $cabang = "LOMPAT JAUH";
}
elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 4 && $mft == 1)
{
    $cabang = "LEMPAR CAKRAM";
}
elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 4 && $mft == 2)
{
    $cabang = "LEMPAR LEMBING";
}
elseif ($ltbt == 2 && $lt == 5 && $lbb == 2 && $lk == 3 && $l40m == 5 && $mft == 2)
{
    $cabang = "LEMPAR JANGKIT/TIGA";
}
elseif ($ltbt == 2 && $lt == 5 && $lbb == 2 && $lk == 4 && $l40m == 4 && $mft == 2)
{
   $cabang = "LOMPAT TINGGI";
}
elseif ($ltbt == 3 && $lt == 5 && $lbb == 4 && $lk == 3 && $l40m == 4 && $mft == 2)
{
    $cabang = "LOMPAT TINGGI GALAH";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 2)
{
    $cabang  = "LONCAT INDAH";
}
elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 2 && $l40m == 2 && $mft == 1)
{
   $cabang  = "LONTAR MARTIL";
}
elseif ($ltbt == 5 && $lt == 2 && $lbb == 5 && $lk == 1 && $l40m == 1 && $mft == 3)
{
    $cabang  = "PANAHAN";
}
elseif ($ltbt == 5 && $lt == 5 && $lbb == 2 && $lk == 4 && $l40m == 4 && $mft == 4)
{
    $cabang = "PANJAT TEBING";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
{
   $cabang  = "PENCAK SILAT";
}
elseif ($ltbt == 3 && $lt == 5 && $lbb == 5 && $lk == 3 && $l40m == 5 && $mft == 4)
{
   $cabang  = " RENANG JARAK PENDEK";
}
elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 4 && $mft == 5)
{
     $cabang = "RENANG JARAK JAUH";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 2)
{
    $cabang = "SENAM";
}
elseif ($ltbt == 4 && $lt == 4 && $lbb == 3 && $lk == 4 && $l40m == 4 && $mft == 4)
{
     $cabang = "SEPAK BOLA";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
{
    $cabang = "SEPAK TAKRAW";
}
elseif ($ltbt == 3 && $lt == 5 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 5)
{
  $cabang = "SEPEDA";
}
elseif ($ltbt == 5 && $lt == 4 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 4)
{
    $cabang = "SOFTBALL";
}
elseif ($ltbt == 5 && $lt == 4 && $lbb == 5 && $lk == 5 && $l40m == 5 && $mft == 4)
{
    $cabang = "SQUASH";
}
elseif ($ltbt == 2 && $lt == 5 && $lbb == 1 && $lk == 4 && $l40m == 4 && $mft == 5)
{
     $cabang= "STEEPLECHASE";
}
elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
{
    $cabang = "TAEKWONDO";
}
elseif ($ltbt == 5 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 5)
{
     $cabang = "TENIS";
}
elseif ($ltbt == 5 && $lt == 3 && $lbb == 3 && $lk == 3 && $l40m == 3 && $mft == 3)
{
    $cabang = "TENIS MEJA";
}
elseif ($ltbt == 4 && $lt == 3 && $lbb == 5 && $lk == 4 && $l40m == 4 && $mft == 4)
{
    $cabang = "TINJU";
}
elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 2 && $l40m == 2 && $mft == 1)
{
    $cabang = "TOLAK PELURU";
}
else
{
    $cabang = "TIDAK ADA CABANG";
}

$sql= mysqli_query($dbcon,"UPDATE penilaian SET 
											ltbt='$ltbt',
											lt='$lt',
											lbb='$lbb',
											lk='$lk',
											l40m='$l40m',
											mft='$mft',
											cabang='$cabang'
											 
											 WHERE nisn = $nisn");

header('location:../nilai.php');

?>