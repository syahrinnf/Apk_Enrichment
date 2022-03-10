<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Arsip</title>
	<link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles.css" rel="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    
	

	  	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Menu Utama Admin</title>
      
        <link href="bootstrap_dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <sript src= "https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <?php include "header.php"; ?>


<?php
$view = isset($_GET['view']) ? $_GET['view'] : null;

switch($view){
	default:
	?>

<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
        <center><a class="navbar-brand ps-3" href="index.html"><span class='material-icons'><img src='' /></span>
        </a></center>
            <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
      
            <!-- Navbar-->
        <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		<li class="dropdown user user-menu"  align="right">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"  align="pullright">
 		<span class="hidden-xs"><span class='material-icons'><img src='assets/img/settings_white_36dp.svg' /></span>
        </a></center>
		<ul class="dropdown-menu">
    	<p>
        <a class="dropdown-item" href="logout.php">Logout</a>
        </ul>
		</p>
		</li>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">    
        						<a class="nav-link" href="data_mahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div><h4>Data Petugas</a></h4>
                                <a class="nav-link" href="arsip_menu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div><h4>Arsip</a></h4>
                                <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Presensi Kunjungan</a></h4>
			                    <a class="nav-link" href="daftar-kunjungan.php">
                                <div></i></div><h5>--Harian--</a></h5>
                                <a class="nav-link" href="laporan_mingguan.php">
                                <div></i></div><h5>--Mingguan--</a></h5>
                                <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div><h4>Chart Kunjungan</a></h4>
                                <a class="nav-link" href="kunjungan-harian.php">
                                <div></i></div><h5>--Harian--</a></h5>
                                <a class="nav-link" href="kunjungan-mingguan.php">
                                <div></i></div><h5>--Mingguan--</a></h5>
                          
                           
                               <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                               <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                               Authentication
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                               </a>
                               <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                               <nav class="sb-sidenav-menu-nested nav">
                               <a class="nav-link" href="login.html">Login</a>
                               <a class="nav-link" href="register.html">Register</a>
                               <a class="nav-link" href="password.html">Forgot Password</a>
                               </nav>
                               </div>
                               <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                               Error
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                               </a>
                               <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                               <nav class="sb-sidenav-menu-nested nav">
                               <a class="nav-link" href="401.html">401 Page</a>
                               <a class="nav-link" href="404.html">404 Page</a>
                               <a class="nav-link" href="500.html">500 Page</a>
                               </nav>
                               </div>
                               </nav>
                               </div>
                               </div>
                               </div>
                               <div class="sb-sidenav-footer">
                               <div class="small">Logged in as:</div>
                               Admin
                    		   
                    		   </div>
                			   </nav>
            				   </div>
                               <div id="layoutSidenav_content">
                               <main>
							   <div class="container-fluid px-2">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-2">
                          
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-3" a href="daftar-kunjungan.php">
                                <div class="card bg-danger text-black mb-3">
                                    <div class="card-body"><h5><b>BERITA ACARA</b></h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="berita_acara.php"><h7><i>Temukan informasi</h7></a></i>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-warning text-white mb-3">
                                    <div class="card-body"><h5>Jumlah</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"><h7>25</a></h7>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                               </ol>
                               <div class="col-xl-3 col-md-3">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h5>KADER POSYANDU</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kader.php"><h7>5</h7></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
								</div>
                    		   </ol>
                              							   
                               <div class="container-fluid">
                               <h1 class="mt-10"></h1>
                               <ol class="breadcrumb mb-7">
                               <h5><li class="breadcrumb-item active"><b>Daftar Petugas Posyandu</li></h5></b>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
	<div class="row">
			</div>
			<div class="panel-body">
			<a class="btn btn-danger" style="margin-bottom: 10px" href="data_mahasiswa.php?view=tambah"><span class='material-icons'>
                               <img src='assets/img/person_add_white_24dp(2).svg' /><b>Tambah Data</b></span></a>
			<table id="example" class="table table-bordered table-striped" style="width:100%">
            <thead>
					<tr>
					 <th><center>Id Petugas</center></th>
						<th><center>Jabatan</center></th>
						<th><center>Nama Petugas</th>
						<th><center>Alamat</center></th>
						<th><center>Aksi</th></center>
					</tr>
</thead>
<tbody>
					<?php
					$sql=mysqli_query($konek, "SELECT * FROM petugas ORDER BY id ASC");
					
					while($d=mysqli_fetch_array($sql)){
						    echo "<tr>
						
							<td>$d[nopetugas]</td>
							<td>$d[jabatan]</td>
							<td>$d[nama_petugas]</td>
							<td>$d[alamat]</td>
							<td width='150px' align='center'>

							<a class='btn btn-primary btn-sm ' href='buatQRCode.php?nama=$d[nama_petugas]&nomor=$d[nopetugas]'>QR<span class='material-icons'>
                            <img src='assets/img/qr_code_2_black_24dp.svg' /></span></a>
                            <a class='btn btn-warning btn-sm' href='cetak_ijazah.php?id=$d[id]' target='_blank'>Print<span class='material-icons'>
                            <img src='assets/img/print_black_24dp.svg' /></span></a>

							<a class='btn btn-secondary btn-sm' href='edit.php?id=$d[id]'>Edit<span class='material-icons'>
                            <img src='assets/img/update_black_24dp.svg' /></span></a>

							<a class='btn btn-danger btn-sm' href='delete.php?id=$d[id]&id=$d[id]'>Del<span class='material-icons'>
                            <img src='assets/img/delete_black_24dp.svg' /></span></a>


							</td>
						</tr>";
						
					}
					?>
				</tbody>	
			</table>
            <script>
            $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
			</div>
		</div>
	</div>



<?php
	break;
	case "tambah":

?>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
            <!-- Navbar Brand-->
        <center><a class="navbar-brand ps-3" href="index.html"><span class='material-icons'><img src='assets/img/' /></span>
        </a></center>
            <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
      
            <!-- Navbar-->
        <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		<li class="dropdown user user-menu"  align="right">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"  align="pullright">
 		<span class="hidden-xs"><span class='material-icons'><img src='assets/img/settings_white_36dp.svg' /></span>
        </a></center>
		<ul class="dropdown-menu">
    	<p>
        <a class="dropdown-item" href="logout.php">Logout</a>
        </ul>
		</p>
		</li>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">    
        						<a class="nav-link" href="data_mahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div><h4>Data Mahasiswa</a></h4>
                                <a class="nav-link" href="validasi-ktm">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div><h4>Validasi</a></h4>
                                <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Presensi Kunjungan</a></h4>
			                    <a class="nav-link" href="daftar-kunjungan.php">
                                <div></i></div><h5>--Harian--</a></h5>
                                <a class="nav-link" href="laporan_mingguan.php">
                                <div></i></div><h5>--Mingguan--</a></h5>
                                <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div><h4>Chart Kunjungan</a></h4>
                                <a class="nav-link" href="kunjungan-harian.php">
                                <div></i></div><h5>--Harian--</a></h5>
                                <a class="nav-link" href="kunjungan-mingguan.php">
                                <div></i></div><h5>--Mingguan--</a></h5>
                          
                           
                               <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                               <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                               Authentication
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                               </a>
                               <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                               <nav class="sb-sidenav-menu-nested nav">
                               <a class="nav-link" href="login.html">Login</a>
                               <a class="nav-link" href="register.html">Register</a>
                               <a class="nav-link" href="password.html">Forgot Password</a>
                               </nav>
                               </div>
                               <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                               Error
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                               </a>
                               <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                               <nav class="sb-sidenav-menu-nested nav">
                               <a class="nav-link" href="401.html">401 Page</a>
                               <a class="nav-link" href="404.html">404 Page</a>
                               <a class="nav-link" href="500.html">500 Page</a>
                               </nav>
                               </div>
                               </nav>
                               </div>
                               </div>
                               </div>
                               <div class="sb-sidenav-footer">
                               <div class="small">Logged in as:</div>
                               Admin
                    		   
                    		   </div>
                			   </nav>
            				   </div>
                               <div id="layoutSidenav_content">
                               <main>
							   <div class="container-fluid px-2">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-2">
                              							              
                <center><h4><b>Tambah Data Petugas</li></h4></b></center>
							   <br>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
			
			</div>

			  		</div>
			  		<form method="post" action="aksi_mahasiswa.php?act=insert">
			  		<table class="">
						<tr>
						<td width="120"><strong>No Petugas</strong></td>
						<td>
						<div class="col-md-30"><input class="form-control" type="text" name="nopetugas" required /></div>
						</td>
						</tr>
						<tr>
						<tr>
						<td width="160"><strong>Jabatan</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="jabatan" required /></div>
						</td>
						</tr>
					   
						<td><strong>Nama petugas</td></strong>
						<td><div class="col-md-20"><input class="form-control" type="text" name="nama_petugas" required /></div></td>
						</tr>
						<tr>
						<td><strong>TTL</td></strong>
						<td><div class="col-md-20"><input class="form-control" type="text" name="ttl" required /></div></td>
						</tr>
						<tr>
						<td><strong>Jenis Kelamin</td></strong>
                        <td><input type="radio" value="Laki-laki" name="jenis_kelamin" required>Laki-Laki<br>
                        <input type="radio" value="Perempuan" name="jenis_kelamin" required>Perempuan</td>
                        </tr>
						<tr>
						<td><strong>Alamat</td></strong>
						<td><div class="col-md-20"><input class="form-control" type="text" name="alamat" required /></div></td>
						</tr>
						<td><strong>RT</td><strong>
						<td><div class="col-md-20"><input class="form-control" type="text" name="rt" required /></div></td>
						</tr>
                        <tr>
						<td><b>RW</b></td>
						<td><div class="col-md-20"><input class="form-control" type="text" name="rw" required /></div></td>
						</tr>
						<tr>
						<td></td>
						<td>
						<br>
						<div class="col-md-30">
						<input class="btn btn-warning" type="submit" value="Save" />
						<a class="btn btn-primary" href="data_mahasiswa.php">Back</a>
						</div>
				
							</td>
						</tr>
					</table>
				</form>

			</div>
		</div>
	</div>

<?php
	break;
}
?>


                        </div>
        				</div>
        				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        				<script src="js/scripts.js"></script>
        				<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        				<script src="assets/demo/chart-area-demo.js"></script>
        				<script src="assets/demo/chart-bar-demo.js"></script>
        				<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        				<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        				<script src="assets/demo/datatables-demo.js"></script>
						
</body>
</html>

