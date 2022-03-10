<!DOCTYPE html>
<html lang="en" >

<head>
	<?php
include "header.php";
?>
  <meta charset="UTF-8">
  <title>Mahasiswa</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="assets/style-loginpegawai.css">

  
</head>
<br>
<br>

<form method="POST" action="aksi-loginpegawai.php">
							<div class="kotak_login">
							<strong><p class="tulisan_login">LOGIN USER</p></strong>
   							<center><image src="assets/img/arsip2.jpg" width="70px"/></center>
    						<form>
                            <label>Username</label>
      						<input type="text" name="username" class="form_login" placeholder="Username..">

     						<label>Password</label>
      						<input type="password" name="password" class="form_login" placeholder="Password ..">

     		  				<input type="submit" class="tombol_login" value="Login">
     						<br>
      						<br>
							  <center>
							  <i><a class="link" href="register.php">Buat Akun</a></i>
</center>
    						</form>
							<div class="col-md-4 col-md-offset-4">
							<div class="panel panel-danger">
							</div>
							</div>
							</div>
							<br>
							<br>
							<br>
</html>