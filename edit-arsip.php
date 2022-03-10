<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Arsip Digital</title>
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="style.css">
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
</head>
<body>
<?php
	$id = $_GET['id'];
	$sql = mysqli_query($konek,"select * from files where id='$id'");
	while($d = mysqli_fetch_array($sql)){
		?>
<?php
include ("koneksi.php"); //file koneksi.php yg dibuat di langkah no 1
if ($_POST) {
$filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'), $_FILES['berkas']['size']));
$tipe  = $_FILES['berkas']['type'];
$ukuran = $_FILES['berkas']['size'];
$nama_file = $_FILES['berkas']['name'];
//$filedata = $_FILES['size'];
//$tipe  = $_FILES['type'];
//$ukuran = $_FILES['size'];
//$nama_file = $_FILES['name'];
$id= $_POST['id'];
$no_arsip= $_POST['nomor_arsip'];
$jenis_arsip = $_POST['jenis_arsip'];
$nama= $_POST['nama_arsip'];
$tahun= $_POST['tahun'];
$tanggal =$_POST['tanggal_upload'];
$result = mysqli_query($konek, "SELECT * FROM files WHERE id=$id");
if ($result) header('location:arsip_menu.php'); } 

?>
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
        <a class="nav-link" href="data_mahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div><h4>Data Petugas</a></h4>
                                <a class="nav-link" href="arsip_menu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div><h4>Arsip</a></h4>
                                <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div><h4>Presensi Kunjungan</a></h4>
			                    <a class="nav-link" href="daftar-kunjungan.php">
                          
                           
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
                               <style type="text/css">
	body{
		font-family: roboto;
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



<form enctype="multipart/form-data" method="post" action="aksi-editarsip.php?act=update">

<tbody>
<tr>
              <td>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
              </td>
            </tr>
<td width="160"><strong>Nomor Arsip</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="nomor_arsip" required value="<?php echo $d['id']; ?>"/></div>
						</td>
						</tr>
						<br>
      <tr>    

	  <td width="160"><strong>Jenis Arsip</td></strong>
						<td>
							<div class="col-md-25"><select name="jenis_arsip" class="default-select2 form-control" required><option value="Arsip Dasar">Arsip Dasar</option><option value="Arsip Internal">Arsip Internal</option><option value="Arsip Petugas">Arsip Petugas</option><option value="Arsip Surat">Arsip Surat</option><option value="Arsip Umum">Arsip Umum</option><option value="Arsip Dokumen">Dokumen Kesehatan</option></option></select></div>
				
				</td>
</tr>
						<br>
      <tr>    
	  <td width="160"><strong>Nama Arsip</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="nama_arsip" required value="<?php echo $d['nama_arsip']; ?>"/></div>
						</td>
						</tr>
</tr>
<br>
<tr>
<td width="160"><strong>Tahun</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="tahun" required value="<?php echo $d['tahun']; ?>"/></div>
						</td>
						</tr> 
						<br>
<tr>       
          
      <tr>    
      <td width="160"><strong>Tanggal Upload</td></strong>
						<td><input class="form-control" type="date" name="tanggal_upload" value="<?php echo $d['tanggal_upload']; ?>"/></td>
						</td>
						</tr>
						<br>
      <tr>                            
<tr>
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
	}
	?>
	
 </html>
	