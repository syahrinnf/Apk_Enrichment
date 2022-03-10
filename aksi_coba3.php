<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}

include "koneksi.php";

// jika ada get act
if(isset($_GET['act'])){

	//proses simpan data
	if($_GET['act']=='insert'){

		//variabel dari elemen form
		$filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'), $_FILES['berkas']['size']));
        $tipe  = $_FILES['berkas']['type'];
        $ukuran = $_FILES['berkas']['size'];
        $nama_file = $_FILES['berkas']['name'];
		$no_arsip	= $_POST['nomor_arsip'];
		$jenis_arsip	= $_POST['jenis_arsip'];
		$nama	= $_POST['nama_arsip'];
		$tahun	= $_POST['tahun'];
		$tanggal 	= $_POST['tanggal_upload'];
		$result = mysqli_query($konek, "SELECT * FROM files WHERE id=$id");
	    $cek = mysqli_fetch_array($result);
	    if ($cek!=null){
	    	echo 'data sudah ada';
	    }else{
	    	
	    
		
			if($no_arsip=='' || $jenis_arsip=='' || $nama=='' || $tahun=='' || $tanggal=='' || $tipe=='' || $filedata=='' || $nama_file=='' || $ukuran==''  ){
				header('location:arsip_menu.php?view=tambah');
			}else{			
				//proses simpan data admin
				$simpan = mysqli_query($konek, "INSERT INTO files(nomor_arsip,jenis_arsip,nama_arsip,tahun,tanggal_upload,filetype,filedata,filename,filesize) 
								VALUES ('$no_arsip','$jenis_arsip','$nama','$tahun','$tanggal','$tipe','$filedata','$nama_file','$ukuran')");
				
				if($simpan){
					// BUAT QRCODE
					// tampung data kiriman
					$nomor = $no_arsip;
				
					// include file qrlib.php
					include "phpqrcode/qrlib.php";
				
					//Nama Folder file QR Code kita nantinya akan disimpan
					$tempdir = "artemp/";
				
					//jika folder belum ada, buat folder 
					if (!file_exists($tempdir)){
						mkdir($tempdir);
					}
				
					#parameter inputan
					$isi_teks = $nomor;
					$namafile = $no_arsip.".png";
					$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
					$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
					$padding = 2;
				
					QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

					header('location:arsip_menu.php');
				}else{
					header('location:arsip_menu.php');
				}
			}
		}
	} // akhir proses simpan data

	  else{
		header('location:arsip_menu.php');
	 }

     } // akhir get act

    else{
	header('location:arsip_menu.php');
}
?>

