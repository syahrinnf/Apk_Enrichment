<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Arsip</title>
	<link href="css/styles.css" rel="stylesheet" />
	<link href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link href = "https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

	  	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Menu Utama Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="bootstrap_dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <?php include "header.php"; ?>

		<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-warning">
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
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div><h4>Data Mahasiswa</a></h4>
                                <a class="nav-link" href="validasi-ijazah">
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
						
							   <div class="container-fluid">
                               <h1 class="mt-10"></h1>
                               <ol class="breadcrumb mb-7">
                               <h5><li class="breadcrumb-item active"><srtong>Input Arsip Baru</strong></li>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
	<div class="row">
			</div>
			<div class="panel-body">
			


<form enctype="multipart/form-data" method="post">
<tbody>
<td width="160"><strong>Nomor Arsip</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="jabatan" required /></div>
						</td>
						</tr>
						<br>
      <tr>    
<td width="160"><strong>Jenis Arsip</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="jabatan" required /></div>
						</td>
						</tr>
						<br>
      <tr>    
<td width="160"><strong>Nama Arsip</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="nama_arsip" required /></div>
						</td>
						</tr>
<br>
                        <td width="160"><strong>Tahun</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="tahun" required /></div>
						</td>
						</tr>
						<br>
      <tr>    
      <td width="160"><strong>Tanggal Upload</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="date" name="tanggal" required /></div>
						</td>
						</tr>
                        
<tr>
<td><strong>Pilih File</strong></td>
<td><input type="file" name="berkas" /></td>
</tr>
<tr>
<br>       
<tr>
<td></td>
<td><input type="submit" value="Upload" /></td>
</tr>
</tbody>
</table>
</form>
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