<?php  
$konek= mysqli_connect("localhost", "root", "", "posyandu");
$query = "SELECT * FROM files ORDER BY id ASC";
$result = mysqli_query($konek, $query);
?>
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
        						
                                <a class="nav-link" href="menu_utama_petugas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Arsip</a></h4>
                                <a class="nav-link" href="lihat_agenda.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div><h4>Agenda</a></h4>
                                <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-unlock"></i></div><h4>Logout</a></h4>
	
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
     
    </div><form method="get">
      
      <div class="panel-body">
        <td>
                <div class="col-md-3">
                  <select name="jenis_arsip" class="form-control">
                  <option value="pilih">----Pilih Arsip---</option>
                  <option value="Arsip Dasar">Arsip Dasar</option>
                  <option value="Arsip Internal">Arsip Surat</option>
                  <option value="Arsip Petugas">Arsip Petugas</option>
                  </select>
                </div>
              </td>
             <button id="filter" type="submit" value="FILTER" class="btn btn-primary no-print">Filter</button>  
        </div>
    </form>
   <br>

      <table class="table table-bordered table-striped"  id="example" width="100%">
      <thead>
          <tr>
            <th><center>Nomor Arsip</center></th>
            <th><center>Jenis Arsip</center></th>
             <th><center>Tahun</center></th>
            <th><center>Nama File</center></th>
            <th><center>Preview</center></th>
            <th><center>Download</center></th>
          </tr>
        </thead>
        <tbody>
        </center>
       </tr>
      <?php
      if(isset($_GET['jenis_arsip'])){
        $tgl = $_GET['jenis_arsip'];
        $result = mysqli_query($konek,"select * from files where jenis_arsip='$tgl'");
      }else{
        $result = mysqli_query($konek,"select * from files");
      }
?>

<?php
$sql=mysqli_query($konek, "SELECT * FROM files ORDER BY id ASC");
      while($d= mysqli_fetch_array($result)){
      ?>
      <tr>
         <td><?php echo $d["nomor_arsip"]; ?></td>
       <td><?php echo $d["jenis_arsip"]; ?></td>
        <td><?php echo $d["tahun"]; ?></td>
       <td><?php echo $d["filename"]; ?></td>
       <td><center><a class='btn btn-primary btn-sm' a href="preview_berkas.php?id=<?php echo $d['id']; ?>"><span class='material-icons'>
                        <img src='assets/img/pageview_black_24dp.svg' /></span></a></td>
       <td><center><a class='btn btn-success btn-sm' a href="download.php?filename=<?php echo $d['filename']; ?>"><span class='material-icons'>
                            <img src='assets/img/download_black_24dp.svg' /></span></a></td>
      </tr>

      <?php
      }
      ?>
    </tbody>
     </table>
    </div>
   
  </div>
  </div>
 </div>
</div>
<script> 
      $(document).ready(function() {
        $('#example').DataTable();
    } );
     
    </script>   
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>   



