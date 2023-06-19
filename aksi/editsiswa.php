<?php
if (isset($_GET['name'])==true) {
    include 'onek.php';

    $idsiswa = $_GET['name'];
    $query = "SELECT * FROM siswa WHERE id_siswa = $idsiswa";
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
                            <h1 class="page-header">Data Alternatif</h1>
                            <a class="btn btn-primary"href="nilai.php">Masukkan Nilai Alternatif</a><br><br>
                        </div>

                        <div class="col-lg-8">
                            <form role="form" action="aksi/updatesiswa.php" method="POST">
                                <input type="text" name="id" value="<?php echo $idsiswa ?>" hidden>
                                <div class="form-group">
                                   
                                    <input type="text" required name="nisn" class="form-control" placeholder="NISN" value="<?php echo $r['nisn']?> ">
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="nama" class="form-control" placeholder="NAMA SISWA" value="<?php echo $r['nama']?>">
                                </div>
                                <div class="form-group">
                                    <select name="kelamin" required class="form-control"value="<?php echo $r['kelamin']?>">
                                        <option disabled selected>Jenis Kelamin</option>
                                        <option value="Laki-Laki" <?php if ($r['kelamin']=='Laki-Laki'):echo 'selected' ?>
                                        <?php endif ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if ($r['kelamin']=='Perempuan'):echo 'selected' ?><?php endif ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="umur" class="form-control" placeholder="UMUR" value="<?php echo $r['umur']?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="sekolah" class="form-control" placeholder="SEKOLAH" value="<?php echo $r['siswa']?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn btn-success form-control" value="SUBMIT" placeholder="submit"  onclick="return confirm('Apakah yakin ingin mengedit ?')">
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['submit'])) {
                                    $nisn   = $_POST['nisn'];
                                    $nama   = $_POST['nama'];
                                    $kelamin= $_POST['kelamin'];
                                    $umur  = $_POST['umur'];
                                    $sekolah= $_POST['sekolah'];
                                    // var_dump($nama,$nisn,$kelamin,$kelas,$sekolah);
                                    // die;

                                    //sql insert to siswa
                                    $sql = "INSERT INTO siswa (nisn,nama,kelamin,umur,siswa)VALUES ('$nisn','$nama','$kelamin','$umur','$sekolah')";
                                    $query = mysqli_query($dbcon,$sql);
                                    if ($query) {
                                        echo "<script>alert('berhasil memasukkan data Alternatif')</script>";
                                    }else{
                                        echo "<script>alert('Gagal Memasukkan data')</script>";

                                    }
                                    
                                }else{
                                   
                                }
                            ?>
                            
                        </div>


                        <!-- Menampilkan Tabel Data -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Alternatif
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NISN</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Kelamin</th>
                                                    <th>Umur</th>
                                                    <th>Asal Sekolah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengeluarkan data siswa dari database -->
                                                <?php
                                                 $username=$_SESSION['username'];
                                                if ($_SESSION['akses']!= 'admin') {
                                                    $sqlceksiswa= "SELECT * FROM admin where username='$username'";
                                                    $queryceksiswa = mysqli_query($dbcon, $sqlceksiswa);
                                                    
                                                    $siswa=mysqli_fetch_array($queryceksiswa);
                                                    if( $siswa['nisn']!=null)
                                                    {
                                                        $nisnsiswa= $siswa['nisn'];
                                                     $sql ="SELECT * FROM siswa where nisn=$nisnsiswa";
                                                    }
                                                    else{
                                                        $sql ="SELECT * FROM siswa where umur=99999";
                                                    }

                                                }
                                                else{
                                                    $sql ="SELECT * FROM siswa";
                                                }
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;
                                                   while ($siswa=mysqli_fetch_array($query)) {
                                                        
                                                ?>
                                                <tr>
                                                    <td><?=$n?></td>
                                                    <td><?=$siswa['nisn']?></td>
                                                    <td><?=$siswa['nama']?></td>
                                                    <td><?=$siswa['kelamin']?></td>
                                                    <td><?=$siswa['umur']?></td>
                                                    <td><?=$siswa['siswa']?></td>
                                                    <td><a class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus ?')" href='aksi/hapusa.php?name=<?=$siswa['nisn'];?>'>hapus</a>/<a class="btn btn-danger" href="nav.php?page=editsiswa&name=<?=$siswa['id_siswa'];?>">edit</a></td>
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

