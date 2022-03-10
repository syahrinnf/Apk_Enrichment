<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Pengelolaan Arsip Digital</title>
	<link href="css/styles.css" rel="stylesheet" />
    <link href="bootstrap_dashboard/css/styles.css" rel="stylesheet" />
	  	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="./assets/img/arsip.jpg">
        <link href="css/styles.css" rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
        <link href="css/styles.css" rel=" https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.js "></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js "></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js "></script>
</head>
<body>
    <!-- Fixed navbar -->
    <?php include "header.php"; ?>
        <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
        <center><a class="navbar-brand ps-3" href="index.html"><span class='material-icons'><img src='' /></span>
        </a></center>
            <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <br>
        <a class="navbar-brand" href="./">Hasil Pencarian Arsip</a>
        </div>
    </div>
    </nav>
    <style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
    </style>
    <div class="container">
        <div class="row">
            
                </div>
               <br>
               <br>
                                <center>
                                <img src="assets/img/logo_posyandu.png" width="90px">
                               <h1><bold>Hasil Pencarian</bold></h1>
                                <hr>
                            </td>
                        </tr>
                    </table>
                    <?php
                    $sql=mysqli_query($konek, "SELECT * FROM files WHERE nomor_arsip='$_POST[nomor_arsip]'");
                    $d=mysqli_fetch_array($sql);
                    if(mysqli_num_rows($sql) < 1){
                        ?>
                        <center>
                        <br>
                        <br>
                        <div class="card">
                        <div class="card-header bg-danger text-white">
                        <center><strong>Gagal! Arsip Tidak Ditemukan, Silahkan Coba lagi</center></strong>
                        </div>
                        <i></i>
                        </center>
                        </div>
                        <?php
                    }else{
                    ?>
                    <table class="table table-bordered table-striped border='1' align='center' bgcolor='#EE6868'">
                        <tr>
                            <th><center>No Arsip</th></center>
                            <th><center>Jenis Arsip</th>
                            <th><center>Nama Arsip</th>
                            <th><center>Tahun</th>
                            <th><center>Nama File</th>
                            <th><center>Preview</th>
                            <th><center>Download</th>
                           
                        </tr>
                        <tr>
                            <td><center><?php echo $d['nomor_arsip']; ?></td>
                            <td><center><?php echo $d['jenis_arsip']; ?></td>
                            <td><center><?php echo $d['nama_arsip']; ?></td>
                            <td><center><?php echo $d['tahun']; ?></td>
                            <td><center><?php echo $d['filename']; ?></td>

                           <td><center><a class='btn btn-primary btn-sm' a href="preview_berkas.php?id=<?php echo $d['id']; ?>"><span class='material-icons'>
                        <img src='assets/img/pageview_black_24dp.svg' /></span></a></td>
                            
                            <td><center><a class='btn btn-warning btn-sm' a href="download.php?filename=<?php echo $d['filename']; ?>"><span class='material-icons'>
                            <img src='assets/img/download_black_24dp.svg' /></span></a></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <div class="card">
                        <div class="card-header mt-5 bg-success text-white">
                        <center><strong>Hasil Pencarian Berhasil</center></strong>
                        </div>
                </div>
                    <?php } ?>
                    
                   
                <br>
                <br>
                    <center><a class="btn btn-danger" href="./validasi-arsip/index-arsip.php">Back</a></center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>