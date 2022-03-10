<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Arsip Digital</title>
	<link href="css/styles.css" rel="stylesheet" />
	<link href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link href = "https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

	  	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="bootstrap_dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <?php include "koneksi.php"; ?>
        <style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
    </style>
<body>
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
						
							   <div class="container-fluid">
                               <h1 class="mt-10"></h1>
                               <ol class="breadcrumb mb-7">
                               <h5><li class="breadcrumb-item active"><h4><strong>Presensi Petugas</h4></strong></li>
                               </ol>
                    		   </ol>
                               <div class="card mb-4">
                               <div class="card-header">
                               <div class="card-body">
                               <div class="table-responsive">
		</head>
		<body>
			</div>
			<div class="panel-body">
		 	<a href="#" class="no-print btn btn-danger btn-sm" onclick="window.print();"><span class='material-icons'>
  			<img src='assets/img/print_white_36dp.svg'/>PRINT</span></a>
  			<br>
  			<br>
			<label class="no-print">TANGGAL</label>
			<input type="date" id="tanggal" name="tanggal" class="no-print">
			<button id="filter" value="FILTER" class="btn btn-primary no-print">Filter</button>  
		    <br>
			<br>
			<table class="table table-bordered table-striped" id="example" width="100%" >
					<thead>
						<tr>
						<th>No Petugas</th>
						<th>Jabatan</th>
						<th>Nama Petugas</th>
						<th>Tanggal</th>
						<th>Jam</th>
						<th>RT</th>
						<th>RW</th>
						</tr>
					</thead>
					<tbody>   
	        
					<?php

			if(isset($_GET['tanggal'])){
				$t = $_GET['tanggal'];
				$sql = mysqli_query($konek," SELECT* from presensi where tanggal='$t'");
			}else{
				$sql = mysqli_query($konek,"SELECT * from presensi");
			}
			
					$sql=mysqli_query($konek, "SELECT * FROM presensi");
					while($d=mysqli_fetch_array($sql)){

						echo "<tr>
							<td>$d[nopetugas]</td>
							<td>$d[jabatan]</td>
							<td>$d[nama_petugas]</td>
							<td>$d[tanggal]</td>
							<td>$d[jam]</td>	
							<td>$d[rt]</td>
							<td>$d[rw]</td>
							</tr>";
						
					}
					?>
			</table>

       
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    
   
		<script>
  		$(document).ready(function() {
  	  	$('#example').DataTable();
		} );
		$('#filter').on('click',function(){
			var tgl = $('#tanggal').val();
			console.log(tgl)
  	  		$('#example').DataTable().column(3).search(tgl).draw();

		})
		</script>
		</tbody>	

		
	</div>
	
 