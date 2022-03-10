<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Arsip Digital</title>
	<link href="css/styles.css" rel="stylesheet" />
	  	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="./assets/img/arsip.jpg">
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
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">    
        						<a class="nav-link" href="data_petugas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div><h4>Data Petugas</a></h4>
                                <a class="nav-link" href="arsip_menu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div><h4>Arsip</a></h4>
                                <a class="nav-link" href="kalender.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div><h4>Agenda</a></h4>
                                <a class="nav-link" href="daftar_presensi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Presensi Petugas</a></h4>
			                    
                               
                          
                           
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
          
                               <style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
    </style>
                               <h1 class="mt-10"></h1>
                               <ol class="breadcrumb mb-7">
                               <h5><li class="breadcrumb-item active"><h4><b>Daftar Petugas Posyandu</li></h4></b>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
	<div class="row">
			</div>
			<div class="panel-body">
			<a class="btn btn-danger" style="margin-bottom: 10px" href="data_petugas.php?view=tambah"><span class='material-icons'>
                               <img src='assets/img/person_add_white_24dp(2).svg' /><b>Tambah Data</b></span></a>
			<table id="example" class="table table-bordered table-striped" style="width:100%">
            <thead>
					<tr>
					 <th><center>Id Petugas</center></th>
                     <th><center>Foto</center></th>
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
                            <td><img src='view_berkas.php?id=$d[id]'width='90' height='90'></td>
							<td>$d[jabatan]</td>
							<td>$d[nama_petugas]</td>
							<td>$d[alamat]</td>
							<td width='150px' align='center'>

							<a class='btn btn-primary btn-sm ' href='buatQRCode.php?nama=$d[nama_petugas]&nomor=$d[nopetugas]'><span class='material-icons'>
                            <img src='assets/img/qr_code_2_black_24dp.svg' /></span></a>
                           

							<a class='btn btn-secondary btn-sm' href='edit.php?id=$d[id]'><span class='material-icons'>
                            <img src='assets/img/update_black_24dp.svg' /></span></a>

							<a class='btn btn-danger btn-sm' href='delete.php?id=$d[id]&id=$d[id]'><span class='material-icons'>
                            <img src='assets/img/delete_black_24dp.svg' /></span></a>

                            <a class='btn btn-warning btn-sm' href='cetak_kartu.php?id=$d[id]' target='_blank'><span class='material-icons'>
                            <img src='assets/img/print_black_24dp.svg' /></span></a>


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
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
        <center><a class="navbar-brand ps-3" href="index.html"><span class='material-icons'></span>
        </a></center>
            <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
      
            <!-- Navbar-->
        <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		<li class="dropdown user user-menu"  align="right">
	
        </ul>
		</p>
		</li>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">    
        						<a class="nav-link" href="data_petugas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div><h4>Data Petugas</a></h4>
                                <a class="nav-link" href="arsip_menu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Arsip</a></h4>
                                <a class="nav-link" href="kalender.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div><h4>Agenda</a></h4>
                                <a class="nav-link" href="daftar_presensi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Presensi Petugas</a></h4>
			                   
                          
                           
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
                    
 
                              							              
   <h1 class="mt-10"></h1>
                               <ol class="breadcrumb mb-7">
                               <h5><li class="breadcrumb-item active"><h4><b>Tambah Data Petugas</li></h4></b>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
			
			</div>

			  		</div>
                      <style type="text/css">
	body{
		font-family: roboto;
	}

	
    </style>
                 
                      <form enctype="multipart/form-data" method="post" action="aksi_petugas.php?act=insert">

<tbody>
<td width="160"><strong>ID Petugas</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="nopetugas" required /></div>
						</td>
						</tr>
						<br>
      <tr>    

	  <td width="160"><strong>Jenis Arsip</td></strong>
						<td>
							<div class="col-md-25"><select name="jabatan" class="default-select2 form-control" required><option value="Ketua">Ketua</option><option value="Sekertaris">Sekertaris</option><option value="Bendahara">Bendahara</option><option value="Anggota Kader">Anggota Kader</option></select></div>
				
				</td>
</tr>
						<br>
      <tr>    
	  <td width="160"><strong>Nama Petugas</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="nama_petugas" required /></div>
						</td>
						</tr>
</tr>
<br>
<tr>
<td width="160"><strong>Tempat Tanggal Lahir</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="date" name="ttl" required /></div>
						</td>
						</tr> 
						<br>
                        <tr>
						<td width="160"><strong>Jenis Kelamin</td></strong>
                        <td>
                        <div class="col-md-25"><input type="radio" value="Laki-laki" name="jenis_kelamin" required>Laki-Laki</td>
                        <td>
                        <div class="col-md-25"><input type="radio" value="Perempuan" name="jenis_kelamin" required>Perempuan</td>
                        </tr>  
                        <br>
                        <br>
                        <tr>
<td width="160"><strong>Alamat</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="alamat" name="alamat" required /></div>
						</td>
						</tr> 
						<br>
  
                        <tr>    

<td width="160"><strong>RT</td></strong>
                  <td>
                      <div class="col-md-25"><select name="rt" class="default-select2 form-control" required><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option></select></div>
          
          </td>
</tr>
<tr>    
<br>
<td width="160"><strong>RW</td></strong>
                  <td>
                      <div class="col-md-25"><select name="rw" class="default-select2 form-control" required><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option></select></div>
          
          </td>
</tr>
<br>
<td><strong>Upload File</td></strong>
<td><input type="file" name="berkas" /></td>
</tr>
<br>
<tr>
<td></td>
<button type="submit" value="Upload" class="btn btn-primary"><i class="fa fa-book"></i> &nbsp;Save</button>&nbsp;
<button type="submit" name="back" value="back" class="btn btn-danger"></i>Cancel</button>
</tr>
</head>
</body>
</tbody>
</table>
</form>

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

