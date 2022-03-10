    

 <?php

    //mengambil data dari form input
    $kegiatan   = $_POST['kegiatan'];
    $tanggal    = $_POST['mulai'];
   

    //membuat koneksi ke database
    $konek = mysqli_connect('localhost', 'root', '', 'qrvalidasi');

    //insert data ke dalam database
    mysqli_query($konek, "insert into Jadwal set kegiatan='$kegiatan', tanggal='$tanggal' ");
    

    //kembali ke halaman index.php
    header("location: index.php");

?>