<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $sql = mysqli_query($konek,"select * from petugas where id='".$_GET['id']."'");
    $d = mysqli_fetch_array($sql);
    header("Content-type: " . $d["filetype"]);
    echo $d["filedata"];
}
else
{
    header('location:data_mahasiswa.php');
}
?>