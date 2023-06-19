<?php

session_start();
include 'onek.php';

if (isset($_GET['id'])) {
    if ($_GET['id'] == 'false') {
        echo "<script>alert('username / password salah. Gagal masuk.')</script>";
        header("location:login.php");
    } else if ($_GET['id'] == 'out') {
        echo "<script>alert('Anda belum masuk, silahkan masuk.')</script>";
        header("location:login.php");
    } else {
        echo "<script>alert('Logout berhasil.')</script>";
        header("location:login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Penentu Cabang OlahRaga</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"
    />
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <!-- <link rel="stylesheet" href="css/demo.css" /> -->
  </head>
  <body>
    

    <div class="main-box">
      <div class="slider-cont">
        <div class="signup-slider">
          <div class="img-txt">
            <div class="img-layer"></div>
            <h1>SELAMAT DATANG <br> DI SIPBOGA </h1>
            <img
               src="http://bkd.pemkomedan.go.id/seleksicpns/images/logo_medan.png"
              alt=""
            />
          </div>
          <div class="img-txt">
            <div class="img-layer"></div>
            <h1>
              Sistem Pemandu Cabang Olahraga
            </h1>
            <img
              src="https://cdn.pixabay.com/photo/2019/03/10/14/05/table-tennis-4046284__340.jpg"
              alt=""
            />
          </div>
          <div class="img-txt">
            <div class="img-layer"></div>
            <h1>Temukan Cabang Olahraga Yang Cocok Untuk Kamu</h1>
            <img
              src="https://cdn.pixabay.com/photo/2016/06/15/01/11/soccer-1457988_960_720.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="form-cont">
        <div class="top-buttons">
          <button class="to-signup top-active-button">Daftar</button>
          <button class="to-signin">Masuk</button>
        </div>
        <div class="form form-signup">
          <form action="" method="POST">
            <label>NAMA</label>
            <input type="text" placeholder="Your Name" name="nama" id="" />
            <label>Username</label>
            <input type="text" placeholder="Your Username" name="username" id="" />
            <label>Password</label>
            <input type="password" placeholder="Your Password" name="password" id="" />
            
            <input
              type="submit" class="form-btn" value="daftar" name="daftar" id="" />
            <a style="font-size: 12px;" href="#" class="lined-link to-signin-link"> <br> I am already member</a>
          </form>
                <?php
                if (isset($_POST['daftar'])) {
                $nama   = $_POST['nama'];
                $username   = $_POST['username'];
                $password= $_POST['password'];
              $sql = "INSERT INTO admin (nama,username,password,akses)VALUES ('$nama','$username','$password',1)";
                $query = mysqli_query($dbcon,$sql);
                if ($query) {
                echo "<script>alert('berhasil daftar')</script>";
                header('location:login.php');
                }else{
                echo "<script>alert('Gagal daftar')</script>";

                }
                                
                }else{
                                   
                }
                ?>

                
        </div>
        <div class="form form-signin">
          <form action="#" method="POST">
            <label>Username</label>
            <input type="text" placeholder="Your Username" name="username" id="" />
            <label>Password</label>
            <input type="password" placeholder="Your password" name="password" id="" />
            <input type="submit" class="form-btn" value="masuk" name="masuk" id="" />
            <a style="font-size: 12px;" href="#" class="lined-link to-signup-link"> <br> Create new account</a>
          </form>
          <?php
                        if (isset($_POST['masuk'])) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $sqllogin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                            $querylogin = mysqli_query($dbcon, $sqllogin);
                            $hasil= mysqli_fetch_array($querylogin);
                           


                            if (mysqli_num_rows($querylogin) > 0) {
                               $nisn=$hasil['nisn'];
                            $akseslevel=$hasil['akses'];
                              // $sqlloginsiswa = "SELECT * FROM siswa WHERE nisn=$nisn";
                              // $queryloginsiswa =  mysqli_query($dbcon, $sqlloginsiswa);
                              //  $hasilsiswa= mysqli_fetch_array($queryloginsiswa);
                               if ( $akseslevel== 1) {

                                 $akses='user';
                               }
                               elseif ($akseslevel== 0) {
                                 $akses='admin';
                               }
                               $_SESSION['akses']=$akses;
                               $_SESSION['nisn']=$nisn;
                                $_SESSION['username'] = $username;
                                $_SESSION['stat'] = 'masuk';
                                echo "<script>alert('berhasil masuk selamat datang $username ')</script>";
                                echo ($_SESSION['stat']);
                                header("location:index.php");
                            } else {
                                echo "<script>alert('username/password salah')</script>";
                            }
                        }

                        ?>
        </div>
      </div>
      <div class="clear-fix"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="js/demo.js"></script>
  </body>
</html>
