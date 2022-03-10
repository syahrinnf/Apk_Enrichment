<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $sql = mysqli_query($konek,"SELECT * from files WHERE id='".$_GET['id']."'");
    $d = mysqli_fetch_array($sql);
    header("Content-type: " . $d["filename"]);
    echo $d["filedata"];
}
else
{
    header('location:menu_utama_petugas.php');
}
?>