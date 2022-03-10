<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengeloaan Arsip Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- menghubungkan dengan file css -->
    
    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
</head>

<?php include "header.php"; ?>
        <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
        <center><a class="navbar-brand ps-3" href="index.html"><span class='material-icons'><img src='' /></span>
        </a></center>
        <a class="navbar-brand" href="./">Presensi Petugas</a>
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
               <center>
                                <img src="assets/img/logo_posyandu.png" width="80px">
                               <h3><bold>Presensi Rapat 27/Februari/2022</bold></h3>
                               <br>
          <?php
          $sql=mysqli_query($konek, "SELECT * FROM petugas WHERE nopetugas='$_POST[nopetugas]'");
          $d=mysqli_fetch_array($sql);
          $nopetugas= $d['nopetugas'];
          $jabatan= $d['jabatan'];
          $nama = $d['nama_petugas'];
          $rt = $d['rt'];
          $rw = $d['rw'];
          date_default_timezone_set('Asia/Jakarta');
          $j = date('H:i:sa');
          $t = date('Y-m-d');

                    if(mysqli_num_rows($sql) < 1){
                    ?>
                    <center>
                    <br>
                    <br>
                    <div class="card">
                    <div class="card-header bg-danger text-white">
                    <center><strong>Gagal! Data Tidak Terdaftar, Silahkan Coba lagi</center></strong>
                    </div>
                    <i></i>
                    </center>
                    </div>
                    <?php
                    }else{
                    $presensi = mysqli_query($konek, "INSERT INTO presensi(nopetugas,jabatan,nama_petugas,rt,rw,tanggal,jam) VALUES ('$nopetugas','$jabatan','$nama','$rt','$rw','$t','$j')");
                    ?>
                    <table class="table table-bordered table-striped" border="1" align="center" bgcolor='#EE6868'>
                        <tr>
                        <th><center>Foto</center></th>
                            <th><center>Nomor Petugas</center></th>
                            <th><center>Jabatan</center></th>
                            <th><center>Nama Petugas</center></th>
                            <th><center>RT</center></th>
                            <th><center>RW</center></th>
                            
                           
                        </tr>
                        <tr>
                            <td><center><img src="view_berkas.php?id=<?php echo $d['id']; ?>" width='95' height='95'/><center></td>
                            <td><center><?php echo $d['nopetugas']; ?></center></td>
                            <td><center><?php echo $d['jabatan']; ?></center></td>
                            <td><center><?php echo $d['nama_petugas']; ?></center></td>
                            <td><center><?php echo $d['rt']; ?></center></td>
                            <td><center><?php echo $d['rw']; ?></center></td>
                           
                           
                        </tr>
                        </table>
                        <br>
                        <div class="card">
                        <div class="card-header bg-success text-white">
                        <center><strong>Sukses!</center></strong>
                        </div>

                        <?php } ?>
                        <br>
                        <br>
                        </div> 
                        </div>
                        </div>
                        </div>
                        </form>
                        
</body>
</html>