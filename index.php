<?php
    // include 'cek.php';
    include 'onek.php';
    require_once 'nav.php';
    
?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="font-family: fantasy ; ">SISTEM PEMANDUAN BAKAT CABANG OLAHRAGA</h1>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?=$_SESSION['username']?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="alert alert-info" style="font-family: monospace;   text-align: center;">
                                        Selamat datang, <?=$_SESSION['username']?>. SIPBOGA adalah aplikasi pemandu bakat untuk anda menemukan bakat di cabang olahraga yang sesuai dan tepat <br> <br>
                                        <a class="btn btn-primary" href="alternatif.php">masukkan data siswa/alternatif</a>
                                         <!-- <a href="alternatif.php" class="alert-link">masukkan data siswa/alternatif</a> -->
                                    </div>
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>                        <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                        <center><img class="img-fluid" src="css/II.png" width="20%"><br></center>
                        </div>
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