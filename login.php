<!DOCTIPE html>
<html>
<head>
<link rel="icon" href="./assets/img/arsip.jpg">
	<title>Pengelolaan Arsip Digital</title>
	<br>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/style_login.css">
	
	</head>
	<body>

	<link rel="icon" href="./assets/img/arsip.jpg">
				 <?php 
				 if($_SERVER['REQUEST_METHOD']=='POST'){
					$user	= $_POST['username'];
					$pass	= $_POST['password'];
					$p		= md5($pass);
					if($user=='' || $pass==''){
					?>
					<div class="alert alert-warning alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				    <?php
					echo "<strong>Error!</strong> Form Belum Lengkap!!";
					?>
					</div>
					<?php 
					}else{
					include "koneksi.php";
					$sqlLogin = mysqli_query($konek, "SELECT * FROM admin WHERE username='$user' AND password='$p'");
					$jml=mysqli_num_rows($sqlLogin);
					$d=mysqli_fetch_array($sqlLogin);
					if($jml > 0){
					session_start();
					$_SESSION['login']		= TRUE;
					$_SESSION['id']			= $d['idadmin'];
					$_SESSION['username']	= $d['username'];
					$_SESSION['namalengkap']= $d['namalengkap'];
							
							header('Location:./dokumen.php');
						    }else{
						    ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php
							echo "<strong>Error!</strong> Username dan Password anda Salah!!!";
							?>
							</div>
						    <?php
						     }
						
					         }
				             }
				             ?>

				
							<form method="post" action="" role="form">
							<div class="kotak_login">
							<strong><p class="tulisan_login"><i>Aplikasi Arsip Digital</p></strong></i>
   							<center><image src="assets/img/arsip2.jpg" width="70px"/></center>
    						<form>
                            <label>Username</label>
      						<input type="text" name="username" class="form_login" placeholder="Username..">

     						<label>Password</label>
      						<input type="password" name="password" class="form_login" placeholder="Password ..">

     		  				<input type="submit" class="tombol_login" value="Login">
     						<br>
      						<br>
      						<center><a href="login_pegawai.php" type="button" class="btn btn-block btn-success">Petugas</a></center>
							  <br>
							  <div>
							  <center><i><a class="link" href="validasi-arsip/index-arsip.php">Cari Arsip</a></i>
							</div>
							<br>
							<div>
							  <center><i><a class="link" href="validasi-petugas/">Absen</a></i>
							</div>
    						</form>
							<div class="col-md-4 col-md-offset-4">
							<div class="panel panel-danger">
							</div>
							</div>
							</div>
							<br>
							<br>
							<br>
							<div class='footer'>
			 				<footer class="py-4 bg-light mt-auto no-print">
                   		    <div class="container-fluid">
                        	<div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; STMIK AMIK BANDUNG 2021</div>
                            <div>
                    		</div>
                			</footer>
    						<script src="assets/js/jquery.js></script>
							<script src="assets/js/bootstrap.min.js"></script>
							</body>
							</html>
