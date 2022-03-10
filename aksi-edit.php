
<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
include "koneksi.php";
?>



<?php 
require_once('koneksi.php');

// if(isset($_POST['update']))
// {   
    $id = $_POST['id'];
    $nopetugas   = $_POST['nopetugas'];
    $jabatan    = $_POST['jabatan'];
    $namapetugas = $_POST['nama_petugas'];
    $ttl    = $_POST['ttl'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $alamat   = $_POST['alamat'];
    $rt   = $_POST['rt'];
    $rw   = $_POST['rw'];

    // $result = mysqli_query($konek, "SELECT * FROM petugas WHERE id=$id");
    // $cek = mysqli_fetch_array($result);

    // if ($cek!=null){
        // }else {
            if($id=='' || $nopetugas=='' || $jabatan=='' || $namapetugas=='' || $ttl=='' || $jenis_kelamin=='' || $alamat==''|| $rt==''|| $rw==''){
                header('location:data_mahasiswa.php?view=update');
            }else{          
                //proses simpan data admin
            $result = mysqli_query($konek, "UPDATE petugas SET nopetugas='$nopetugas', jabatan='$jabatan',  nama_petugas='$namapetugas', ttl='$ttl', jenis_kelamin='$jeniskelamin', alamat='$alamat', rt='$rt', rw='$rw ' WHERE id='$id'");

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