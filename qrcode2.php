<?php
//library phpqrcode
include "phpqrcode/qrlib.php";

if(isset($_GET['nama_arsip']) && $_GET['nomor'] !=''){
    //tampung data kiriman
    $nama=$_GET['nama_arsip'];
    $nomor= $_GET['nomor'];

//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "artemp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);

       
            //Isi dari QRCode Saat discan
            $isi_teks = $nomor;
            //Nama file yang akan disimpan pada folder temp 
            $namafile = $no_arsip.".png";
            //Kualitas dari QRCode 
            $quality = 'H'; 
            //Ukuran besar QRCode
            $ukuran = 8; 
            $padding = 0; 
            QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

    ?>

