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
		$nopetugas	= $_POST['nopetugas'];
		$jabatan	= $_POST['jabatan'];
		$nama 	= $_POST['nama_petugas'];
		$ttl 	= $_POST['ttl'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$alamat 	= $_POST['alamat'];
        $rt 	= $_POST['rt'];
        $rw 	= $_POST['rw'];
		$result = mysqli_query($konek, "SELECT * FROM petugas WHERE nopetugas=$nopetugas");
	    $cek = mysqli_fetch_array($result);
	    if ($cek!=null){
	    	echo 'data petugas sudah ada';
	    }else{
	    	
	    
		
			if($nopetugas=='' || $jabatan=='' || $nama=='' || $ttl=='' || $jenis_kelamin=='' || $alamat=='' || $rt=='' || $rw=='' || $filedata=='' || $tipe=='' || $ukuran=='' || $nama_file==''  ){
				header('location:data_petugas.php?view=tambah');
			}else{			
				//proses simpan data admin
				$simpan = mysqli_query($konek, "INSERT INTO petugas(nopetugas,jabatan,nama_petugas,ttl,jenis_kelamin,alamat,rt,rw,filetype,filedata,filename,filesize) 
								VALUES ('$nopetugas','$jabatan','$nama','$ttl','$jenis_kelamin','$alamat','$rt','$rw','$tipe','$filedata','$nama_file','$ukuran')");
				
				if($simpan){
					// BUAT QRCODE
					// tampung data kiriman
					$nomor = $nopetugas;
				
					// include file qrlib.php
					include "phpqrcode/qrlib.php";
				
					//Nama Folder file QR Code kita nantinya akan disimpan
					$tempdir = "temp/";
				
					//jika folder belum ada, buat folder 
					if (!file_exists($tempdir)){
						mkdir($tempdir);
					}
				
					#parameter inputan
					$isi_teks = $nomor;
					$namafile = $nopetugas.".png";
					$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
					$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
					$padding = 2;
				
					QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

					header('location:data_petugas.php');
				}else{
					header('location:data_petugas.php');
				}
			}
		}
	} // akhir proses simpan data

	  else{
		header('location:data_petugas.php');
	 }

     } // akhir get act

    else{
	header('location:data_petugas.php');
}
?>