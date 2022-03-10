
<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


<?php 
require_once('koneksi.php');

// if(isset($_POST['update']))
// {   
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

    // $result = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE npm=$npm");
    // $cek = mysqli_fetch_array($result);

    // if ($cek!=null){
        // }else {
            if($no_arsip=='' || $jenis_arsip=='' || $nama=='' || $tahun=='' || $tanggal=='' || $tipe=='' || $filedata==''|| $nama_file==''|| $ukuran==''){
                header('location:arsip_menu.php?view=update');
            }else{          
                //proses simpan data admin
            $result = mysqli_query($konek, "UPDATE files SET nomor_arsip ='$nomor_arsip', jenis_arsip='$jenis_arsip', tahun='$tahun', tanggal_upload='$tanggal', filetype='$tipe', filedata='$filedata', filename='$nama_file', filesize='$ukuran' WHERE id='$id'");

            if ($result) {
                echo 'Berhasil Di Update';
            } else {
                echo 'Failed';
            }

            

        // }
    // update user data
    
    }
  
// }      
    // Redirect to homepage to display updated user in list

   
    // header('location:data_mahasiswa.php');

?>

</body>
</html>