<?php
if (isset($_GET['name'])==true) {
    include 'onek.php';
    $idPenilaian = $_GET['name'];
    $query = "SELECT * FROM penilaian WHERE id_penilaian = $idPenilaian";
    $sql= mysqli_query($dbcon,$query);
    $r = mysqli_fetch_array($sql);
    $nisn = $r['nisn'];

}else{
    echo "no";
}
?>
        
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Nilai Siswa</h1>
                            
                        </div>

                        <div class="col-lg-8">
                            <form role="form" method="POST" action="aksi/update.php">
                                <input type="hidden" name="nisn" value="<?php echo $nisn;?>">
                                <div class="form-group">
                                    <input required type="text" name="nisn" class="form-control" placeholder="NISN" value="<?php echo $r['nisn']?>">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="ltbt" class="form-control" placeholder="Lempar Tangkap Bola Tenis" value="<?php echo $r['ltbt']?>">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="lt" class="form-control" placeholder="Loncat Tegak" value="<?php echo $r['lt']?>">
                                </div> 
                                <div class="form-group">
                                    <input required type="text" name="lbb" class="form-control" placeholder="Lempar Bola Basket" value="<?php echo $r['lbb']?>">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="lk" class="form-control" placeholder="Lari Kelincahan" value="<?php echo $r['lk']?>">
                                </div> 
                                <div class="form-group">
                                    <input required type="text" name="l40m" class="form-control" placeholder="Lari Cepat 40 m" value="<?php echo $r['l40m']?>">
                                </div> 
                                <div class="form-group">
                                    <input required type="text" name="mft" class="form-control" placeholder="Lari Multi Tahap 4" value="<?php echo $r['mft']?>">
                                </div>  

                                <div class="form-group">
                                    <input type="submit" name="submit" class=" btn btn-success form-control" value="submit" placeholder="submit" value="Update" onclick="return confirm('Apakah yakin ingin mengedit ?')">
                                </div>
                            </form>
                            
                        </div>
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
                                                        
                                                       
                                                        <td><a class="btn btn-danger" href="aksi/hapusna.php?name=<?=$siswa['id_penilaian'];?>">hapus</a>/<a class="btn btn-danger" href="nav.php?page=edit&name=<?=$siswa['id_penilaian'];?>">edit</a><td>

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
    // require_once '../foot.php';
 ?>