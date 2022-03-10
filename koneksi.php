<?php
//variabel koneksi
$konek = mysqli_connect("localhost","root","","posyandu");

if(!$konek){
	echo "Koneksi Database Gagal...!!!";
}
?>