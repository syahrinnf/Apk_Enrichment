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
       
        <link href="css/styles.css" rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
        <link href="css/styles.css" rel=" https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.js "></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js "></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js "></script>
        <script type="text/javascript" src="chartjs/Chart.js"></script>
        <?php include "header.php"; ?>
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
                                <a class="nav-link" href="daftar_presensi">
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
                               <div class="container-fluid">
                                   <br>
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
                               <h5><li class="breadcrumb-item active"><h4><b>Daftar Arsip</li></h4></b>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
	<div class="row">
    <form method="get">  
      <div class="panel-body">
        <td>
             
			<a class="btn btn-primary" style="margin-bottom: 10px" href="coba3.php"><span class='material-icons'>
                               <img src='assets/img/library_books_white_24dp.svg' /><b>Tambah Arsip</b></span></a>
			<table class="table table-bordered table-striped" id="example">
				<thead>
					<tr>
						
						<th><center>Nomor Arsip </center></th>
						<th><center>Jenis Arsip</center></th>
                        <th><center>Nama Arsip</center></th>
                        <th><center>Tanggal Upload</th>
                        <th><center>Nama File</center></th>
						<th><center>Aksi</th></center>
                        </tr>
</thead>
<tbody>
					<?php
					$sql=mysqli_query($konek, "SELECT * FROM files ORDER BY id ASC");
					
					while($d=mysqli_fetch_array($sql)){
						    echo "<tr>
						
							<td>$d[nomor_arsip]</td>
							<td>$d[jenis_arsip]</td>
                            <td>$d[nama_arsip]</td>
                            <td>$d[tanggal_upload]</td>
                            <td>$d[filename]</td>

							<td width='150px' align='center'>


							<a class='btn btn-success btn-sm' href='edit-arsip.php?id=$d[id]'><span class='material-icons'>
                            <img src='assets/img/update_black_24dp.svg' /></span></a>

                            <a class='btn btn-warning btn-sm' href='qrcode2.php?nama=$d[nama_arsip]&nomor=$d[nomor_arsip]'><span class='material-icons'>
                            <img src='assets/img/qr_code_2_black_24dp.svg' /></span></a>
                            
                            <a class='btn btn-primary btn-sm' href='download.php?filename=$d[filename]'><span class='material-icons'>
                            <img src='assets/img/download_black_24dp.svg' /></span></a>

							<a class='btn btn-danger btn-sm' href='delete-arsip.php?id=$d[id]&id=$d[id]'><span class='material-icons'>
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

</body>
</html>