<!DOCTYPE html>
<html>
<head>
    <title>Pengelolaan Arsip Digital</title>
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
        <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		
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
                                <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div><h4>Logout</a></h4>
			                    
	
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
                               </ol>
                    
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-warning text-white mb-3">
                    <span class='material-icons'><center><img src='assets/img/folder_white_48dp.svg' /><h5>Total Arsip</h5><div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="big text-white stretched-link" href="#"><h7><strong>Total Arsip : 50</a></strong></h7>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                               </ol>
                               <div class="col-xl-3 col-md-3">
                                <div class="card bg-success text-white mb-4">
                                <span class='material-icons'><center><img src='assets/img/file_copy_white_48dp.svg' /><h5>Jenis Arsip</h5><div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kader.php"><strong><h7>Kategori Arsip : 5</h7></strong></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
								</div>
                    		   </ol>
                               <div class="col-xl-3 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                <span class='material-icons'><center><img src='assets/img/upload_file_white_48dp.svg' /><h5>Upload</h5><div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kader.php"><strong><h7>Hari Ini : 3</h7></strong></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
								</div>
                    		   </ol>
                               <div class="col-xl-3 col-md-3">
                                <div class="card bg-secondary text-white mb-4">
                                <span class='material-icons'><center><img src='assets/img/cloud_download_white_48dp.svg' /><h5>Download</h5><div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kader.php"><strong><h7>Hari Ini : 5</h7></strong></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
								</div>
                    		   </ol>
                               <div>
							   <h1 class="mt-10"></h1>
                               <ol class="breadcrumb mb-7">
                               <center><h5><li class="breadcrumb-item active"><h4><b>Statistik Jenis Dukomen</li></h4></b></center>
                               </ol>
                    		   </ol>
							   <style>
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>
	<div style="width: 700px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Arsip Dasar", "Arsip Internal", "Arsip Umum", "Arsip Surat"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_dasar = mysqli_query($konek,"select * from files where jenis_arsip='arsip dasar'");
					echo mysqli_num_rows($jumlah_dasar);
					?>, 
					<?php 
					$jumlah_internal = mysqli_query($konek,"select * from files where jenis_arsip='arsip internal'");
					echo mysqli_num_rows($jumlah_internal);
					?>, 
					<?php 
					$jumlah_umum = mysqli_query($konek,"select * from files where jenis_arsip='Arsip umum'");
					echo mysqli_num_rows($jumlah_umum);
					?>, 
					<?php 
					$jumlah_surat= mysqli_query($konek,"select * from files where jenis_arsip='arsip surat'");
					echo mysqli_num_rows($jumlah_surat);
					?>
					],
					backgroundColor: [
					'#16a085',
					'#f39c12',
					'#e74c3c',
					'#2980b9',
					],
					borderColor: [
					'#16a085',
					'#f39c12',
					'#e74c3c',
					'#2980b9',
					],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
    

</body>
</html>