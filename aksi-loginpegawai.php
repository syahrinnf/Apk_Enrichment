<?php

include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($konek,"select * from tb_user where username='".$username."' and password='".$password."'");

  $rows = mysqli_num_rows($query);
   if ($rows == 1) {
    $_SESSION['login_user']=$username; // Membuat Sesi/session
    header("location: menu_utama_petugas.php"); // Mengarahkan ke halaman profil
    } else {
    echo "Username atau Password belum terdaftar";
    }