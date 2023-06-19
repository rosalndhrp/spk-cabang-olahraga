<?php
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Nilai Siswa</h1>
                            
                        </div>

                        <div class="col-lg-8">
                            <form role="form" method="POST" action="">
                                <div class="form-group">
                                    <input required type="text" name="nisn" class="form-control" placeholder="NISN">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="ltbt" class="form-control" placeholder="Lempar Tangkap Bola Tenis">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="lt" class="form-control" placeholder="Loncat Tegak">
                                </div> 
                                <div class="form-group">
                                    <input required type="text" name="lbb" class="form-control" placeholder="Lempar Bola Basket">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="lk" class="form-control" placeholder="Lari Kelincahan">
                                </div> 
                                <div class="form-group">
                                    <input required type="text" name="l40m" class="form-control" placeholder="Lari Cepat 40 m">
                                </div> 
                                <div class="form-group">
                                    <input required type="text" name="mft" class="form-control" placeholder="Lari Multi Tahap 4">
                                </div>  

                                <div class="form-group">
                                    <input type="submit" name="submit" class=" btn btn-success form-control" value="submit" placeholder="submit">
                                </div>
                            </form>


                            <?php
                                if (isset($_POST['submit'])) {
                                    $nisn    = $_POST['nisn'];
                                    $ltbt= $_POST['ltbt'];
                                    $lbb= $_POST['lbb'];
                                    $lt = $_POST['lt'];
                                   
                                    $lk = $_POST['lk'];
                                    $l40m = $_POST['l40m'];
                                    $mft = $_POST['mft'];
                                  
                                    
                                    $sqlceknilai = "SELECT * FROM penilaian WHERE nisn=$nisn";
                                    $sqlcek  = "SELECT * FROM siswa WHERE nisn=$nisn ";
                                    $cekquery= mysqli_query($dbcon,$sqlcek);

                                     if (mysqli_num_rows($cekquery) < 1) {
                                        echo "<script>alert('data siswa tidak ditemukan')</script>";
                                    }
                                    
                                    if (mysqli_num_rows($cekquery) < 1) {
                                        echo "<script>alert('data siswa tidak ditemukan')</script>";
                                    }else{
                                        if (mysqli_num_rows(mysqli_query($dbcon,$sqlceknilai)) < 1 ) {
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
                                             $sql = "INSERT INTO penilaian (nisn,ltbt,lt,lbb,lk,l40m,mft,cabang)VALUES ('$nisn','$ltbt','$lt','$lbb','$lk','$l40m','$mft','$cabang')";
                                            $query = mysqli_query($dbcon,$sql);
                                            if ($query) {
                                                echo "<script>alert('berhasil memasukkan data penilaian')</script>";
                                            }else{
                                                echo "<script>alert('Gagal Memasukkan data')</script>";
                                            }
                                        }else{
                                                echo "<script>alert('Duplikasi Data dengan NIM tersebut')</script>";

                                        }
                                    }                                        
                                }

                            ?>
                        </div>
                        &nbsp; &nbsp;
                        <a class="btn btn-primary" href="spk.php">Lihat Hasil</a><br><br>


                         <!-- Menampilkan Tabel Data -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Alternatif
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                
                                            </thead>
                                            <tbody>
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
                                                    <th>Aksi</th>
                                                </tr>                                       <!-- mengeluarkan data siswa dari database -->

                                                <?php
                                                $username=$_SESSION['username'];
                                                // var_dump($_SESSION);
                                                if ($_SESSION['akses']!= 'admin') {
                                                    $sqlceksiswa= "SELECT * FROM admin where username='$username'";
                                                    $queryceksiswa = mysqli_query($dbcon, $sqlceksiswa);
                                                    
                                                    $siswa=mysqli_fetch_array($queryceksiswa);
                                                    $nisnsiswa =$siswa['nisn'];
                                                      $sql ="SELECT * FROM penilaian where nisn=$nisnsiswa";
                                                }
                                                else{
                                                    $sql ="SELECT * FROM penilaian";
                                                }
                                                   
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;



                                                   while ($siswa=mysqli_fetch_array($query)) {
                                                        $nisn = $siswa['nisn'];
                                                        $sqlnama = "SELECT nama FROM siswa WHERE nisn = $nisn";
                                                        $namasiswa = mysqli_fetch_array(mysqli_query($dbcon,$sqlnama));
                                                ?>

                                                     <tr>
                                                        <td><?=$n?></td>
                                                        <td><?=$siswa['nisn']?></td>
                                                        <td><?=$namasiswa['nama']?></td>
                                                        <td class="text-right"><?=$siswa['ltbt']?></td>
                                                        <td class="text-right"><?=$siswa['lt']?></td>
                                                        <td class="text-right"><?=$siswa['lbb']?></td>
                                                        <td class="text-right"><?=$siswa['lk']?></td>
                                                        <td class="text-right"><?=$siswa['l40m']?></td>
                                                        <td class="text-right"><?=$siswa['mft']?></td>
                                                        
                                                       
                                                        <td><a class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus ?')" href="aksi/hapusna.php?name=<?=$siswa['id_penilaian'];?>">hapus</a>/<a class="btn btn-danger" href="nav.php?page=edit&name=<?=$siswa['id_penilaian'];?>">edit</a></td>
                                                    </tr>
                                                <?php
                                                    $n++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Tabel Data -->


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