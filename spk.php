<?php
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">HASIL</h1>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>LTBT</th>
                                    <th>LT</th>
                                    <th>LBB</th>
                                    <th>LK</th>
                                    <th>L.40m</th>
                                    <th>MFT</th>
                                    <th style="text-align: center;">CABANG OLAHRAGA</th>
                                    <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $n = 1 ;
                                    // $sqljumlah ="SELECT ltbt,lbb,lt,lk,l40m,mft FROM penilaian";
                                    // $queryjumlah= mysqli_query($dbcon,$sqljumlah);
                                    // $jumlah0=mysqli_fetch_array($queryjumlah);
                                    // $jumlah = $jumlah0[0];
                                    // $skor="SELECT ltbt,lbb,lt,lk,l40m,mft FROM penilaian"
                                    // bobot
                                    // $sqlkriteria ="SELECT bobot FROM kriteria";
                                    // $querypenilaian = mysqli_query($dbcon, $sqljumlah);
                                    // $bobot=[];
                                    // while ($barispenilaian= mysqli_fetch_array($querypenilaian)) {
                                    //     $bobot[]=$barispenilaian['ltbt,lbb,lt,lk,l40m,mft'];
                                    // }
                                    // // var_dump($bobot);die();
                                    // //end bobot
                                    
                                    // //nilai 
                                    $username=$_SESSION['username'];
                                                // var_dump($_SESSION);
                                                if ($_SESSION['akses']!= 'admin') {
                                                    $sqlceksiswa= "SELECT * FROM admin where username='$username'";
                                                    $queryceksiswa = mysqli_query($dbcon, $sqlceksiswa);
                                                    
                                                    $siswa=mysqli_fetch_array($queryceksiswa);
                                                    $nisnsiswa =$siswa['nisn'];
                                                      $sqlnilai ="SELECT * FROM penilaian where nisn=$nisnsiswa";
                                                }
                                                else{
                                                    $sqlnilai ="SELECT * FROM penilaian";
                                                }
                                    // $sqlnilai = "SELECT * FROM penilaian";
                                    $querynilai = mysqli_query($dbcon,$sqlnilai);

                                    

                                    while ($barisnilai=mysqli_fetch_array($querynilai)) {  
                                        //nama
                                        $nisn= $barisnilai['nisn'];
                                        $sqlnama = "SELECT nama FROM siswa WHERE nisn = $nisn";
                                        $namasiswa = mysqli_fetch_array(mysqli_query($dbcon,$sqlnama));
                                        //nilai
                                        $ltbt = $barisnilai['ltbt'];
                                        $lt = $barisnilai['lt'];
                                        $lbb = $barisnilai['lbb'];
                                        $lk = $barisnilai['lk'];
                                        $l40m = $barisnilai['l40m'];
                                        $mft = $barisnilai['mft'];
                                        $cabang = $barisnilai['cabang'];
                                        


                                        

                                        // if ($ltbt==5  && $lt==4 && $lbb=4 && $lk==4 && $l40m==4 && $mft==4) {
                                        //     $cabang = "ANGGAR";
                                        // }

                                        // elseif ($ltbt == 3 && $lt == 5 && $lbb == 5 && $lk == 2 && $l40m == 2 && $mft == 1)
                                        // {
                                        //         $cabang = "ANGKAT BESI";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 4 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //         $cabang = "BASEBALL";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 5 && $lbb == 5 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //         $cabang = "BOLA BASKET";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 4 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //         $cabang= "BOLA TANGAN";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 4 && $lbb == 5 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //        $cabang = "BOLA VOLI";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 5 && $mft == 5)
                                        // {
                                        //        $cabang  = "BULU TANGKIS";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 5 && $lbb == 5 && $lk == 2 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "DAYUNG";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 4 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "HOKI";
                                        // }
                                        // elseif ($ltbt == 1 && $lt == 3 && $lbb == 1 && $lk == 2 && $l40m == 2 && $mft == 5)
                                        // {
                                        //     $cabang  = "JALAN";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 2 && $mft == 3)
                                        // {
                                        //    $cabang   = "JUDO";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 3 && $lbb == 5 && $lk == 2 && $l40m == 3 && $mft == 4)
                                        // {
                                        //    $cabang = "KANO";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "KARATE-DO";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
                                        // {
                                        //      $cabang  = "KUNG FU";
                                        // }
                                        // elseif ($ltbt == 1 && $lt == 5 && $lbb == 3 && $lk == 4 && $l40m == 5 && $mft == 2)
                                        // {
                                        //      $cabang = "LARI CEPAT";
                                        // }
                                        // elseif ($ltbt == 1 && $lt == 3 && $lbb == 1 && $lk == 3 && $l40m == 4 && $mft == 5)
                                        // {
                                        //      $cabang = "LARI JARAK JAUH";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 5 && $lbb == 1 && $lk == 5 && $l40m == 5 && $mft == 2)
                                        // {
                                        //      $cabang = "LARI GAWANG";
                                        // }
                                        // elseif ($ltbt == 2 && $lt == 5 && $lbb == 2 && $lk == 3 && $l40m == 4 && $mft == 2)
                                        // {
                                        //    $cabang = "LOMPAT JAUH";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 4 && $mft == 1)
                                        // {
                                        //     $cabang = "LEMPAR CAKRAM";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 4 && $mft == 2)
                                        // {
                                        //     $cabang = "LEMPAR LEMBING";
                                        // }
                                        // elseif ($ltbt == 2 && $lt == 5 && $lbb == 2 && $lk == 3 && $l40m == 5 && $mft == 2)
                                        // {
                                        //     $cabang = "LEMPAR JANGKIT/TIGA";
                                        // }
                                        // elseif ($ltbt == 2 && $lt == 5 && $lbb == 2 && $lk == 4 && $l40m == 4 && $mft == 2)
                                        // {
                                        //    $cabang = "LOMPAT TINGGI";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 5 && $lbb == 4 && $lk == 3 && $l40m == 4 && $mft == 2)
                                        // {
                                        //     $cabang = "LOMPAT TINGGI GALAH";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 2)
                                        // {
                                        //     $cabang  = "LONCAT INDAH";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 2 && $l40m == 2 && $mft == 1)
                                        // {
                                        //    $cabang  = "LONTAR MARTIL";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 2 && $lbb == 5 && $lk == 1 && $l40m == 1 && $mft == 3)
                                        // {
                                        //     $cabang  = "PANAHAN";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 5 && $lbb == 2 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "PANJAT TEBING";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
                                        // {
                                        //    $cabang  = "PENCAK SILAT";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 5 && $lbb == 5 && $lk == 3 && $l40m == 5 && $mft == 4)
                                        // {
                                        //    $cabang  = "JARAK PENDEK";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 3 && $l40m == 4 && $mft == 5)
                                        // {
                                        //      $cabang = "JARAK JAUH";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 2)
                                        // {
                                        //     $cabang = "SENAM";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 4 && $lbb == 3 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //      $cabang = "SEPAK BOLA";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "SEPAK TAKRAW";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 5 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 5)
                                        // {
                                        //   $cabang = "SEPEDA";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 4 && $lbb == 4 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "SOFTBALL";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 4 && $lbb == 5 && $lk == 5 && $l40m == 5 && $mft == 4)
                                        // {
                                        //     $cabang = "SQUASH";
                                        // }
                                        // elseif ($ltbt == 2 && $lt == 5 && $lbb == 1 && $lk == 4 && $l40m == 4 && $mft == 5)
                                        // {
                                        //      $cabang= "STEEPLECHASE";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "TAEKWONDO";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 5 && $lbb == 5 && $lk == 5 && $l40m == 4 && $mft == 5)
                                        // {
                                        //      $cabang = "TENIS";
                                        // }
                                        // elseif ($ltbt == 5 && $lt == 3 && $lbb == 3 && $lk == 3 && $l40m == 3 && $mft == 3)
                                        // {
                                        //     $cabang = "TENIS MEJA";
                                        // }
                                        // elseif ($ltbt == 4 && $lt == 3 && $lbb == 5 && $lk == 4 && $l40m == 4 && $mft == 4)
                                        // {
                                        //     $cabang = "TINJU";
                                        // }
                                        // elseif ($ltbt == 3 && $lt == 4 && $lbb == 5 && $lk == 2 && $l40m == 2 && $mft == 1)
                                        // {
                                        //     $cabang = "TOLAK PELURU";
                                        // }
                                        // else
                                        // {
                                        //     $cabang = "TIDAK ADA CABANG";
                                        // }
                                        
                                        ?>
                                        <tr>
                                        <td><?=$n?></td>
                                        <td><?=$barisnilai['nisn']?></td>
                                        <td><?=$namasiswa['nama'] ?></td>
                                        <td class="text-right"><?=$barisnilai['ltbt']?></td>
                                        <td class="text-right"><?=$barisnilai['lt']?></td>
                                        <td class="text-right"><?=$barisnilai['lbb']?></td>
                                        <td class="text-right"><?=$barisnilai['lk']?></td>
                                        <td class="text-right"><?=$barisnilai['l40m']?></td>
                                        <td class="text-right"><?=$barisnilai['mft']?></td>
                                       

                                        <td><?= $cabang?></td>
                                        <td><a class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus ?')"  href="aksi/hapusna.php?name=<?=$barisnilai['id_penilaian'];?>">hapus</a></td>
                                        </tr>
                                    <?php    
                                    $n++;
                                    }
                                        
                                    ?>
                                    

                               
                                
                                    
                                </tbody>
                            </table>    
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<?php 
    require_once 'foot.php';
 ?>