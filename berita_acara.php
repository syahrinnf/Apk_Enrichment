<?php  
//index.php
$konek= mysqli_connect("localhost", "root", "", "pkl");
$query = "SELECT * FROM mahasiswa ORDER BY id ASC";
$result = mysqli_query($konek, $query);
 ?>  
<!DOCTYPE html>  
<html>  
 <head> 
 <title>Pengelolaan Arsip Digital</title>
 <?php include "header.php"; ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rek="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="stykemenu.css">

  
  <script src="jquery.min.js"></script>  
  <link rel="stylesheet" href="bootstrap.min.css" />  
  <script src="bootstrap.min.js"></script>  
 </head>  
 <body> 
  <style>

    @font-face {
    font-family: Lobster-Reguler;
    src: url('../fonts/Lobster-Regular.ttf');
    }

    .wrap .header{
  background: #E67E22;
  height: 70px;
  border: 1px solid orange;
  margin-bottom:2px;
  /*height: 50px;*/
  padding: 2px 10px;
}
#title{
  float: left;
  width : 400px;
  color : white;
  font-size : 15px; 
  font-weight : bold;
  margin: 20px; 
  margin-left: 2px;
  font-family: Lobster-Reguler;

} 

#title2{
  float: right;
  width : 100px;
  color : white;
  font-size : 20px; 
  font-weight : bold;
  margin: 3px; 
  margin-right: 2px;

} 

#title3{
  float: right;
  width : 150px;
  color : white;
  font-size : 20px; 
  font-weight : bold;
  margin: 3px; 
  margin-right: 2px;

} 
#logo{
  float: left;
  height: 100px;
  width: 100px; 
  margin: 5px;
  margin-left: 60px;
}
.wrapper .menu{
 background: yellow;
}

.wrapper .menu ul{
 padding: 0;
 margin: 0;
 background: gray;
 overflow: hidden;
}

.wrapper .menu ul li{
 float: left;
 list-style-type: none;
 padding: 10px;
}

.wrapper .menu ul li a{
 text-decoration: none;
 color: white;
 padding-left: 45px;
  </style>
  
<div>
<div class="wrap">
 <div id="logo">
<img height = "60" width = "90"src = "assets/img/logo_posyandu.png">

</div>
 <div class="header">
<div id="title">
BERITA ACARA KADER POSYANDU FLAMBOYAN III
</div>

<!--<div id="title2">
<a class='btn btn-warning btn-xs' href="loginmhs.php" align="right"><strong>Keluar</strong><span class='material-icons'>
<img src='assets/img/lock_open_white_48dp.svg'/></span></a>
</div>

<div id="title3">
<a class='btn btn-danger btn-xs' href="validasi-ktm" align="right"><strong>Mulai Validasi</strong><span class='material-icons'>
<img src='assets/img/center_focus_strong_white_48dp.svg'/></span></a>-->
</div>

</div> 
</div>
<br>
<div class="container" style="width:1000px;"> 
      <div class="card">
  
  <br>
  <div class="card">
  <div class="card-header bg-info text-white">
    <center><h5><b>------------------- UPDATE INFORMASI ---------------------</h5></b></center>
  </div>
 
  <div class="card-body bg-success text-white">
     Card adalah fitur yang diberikan di bootstrap 4 untuk membuat box yang memiliki border dan padding didalamnya, dalam card ini anda dapat mengatur bagian header, footer, content, warna dan pengaturan yang lain.Card adalah fitur yang diberikan di bootstrap 4 untuk membuat box yang memiliki border dan padding didalamnya, dalam card ini anda dapat mengatur bagian header, footer, content, warna dan pengaturan yang lain.Card adalah fitur yang diberikan di bootstrap 4 untuk membuat box yang memiliki border dan padding didalamnya, dalam card ini anda dapat mengatur bagian header, footer, content, warna dan pengaturan yang lain.<a href="https://www.karawangkab.go.id">
  </div>
 
  <div class="card-footer bg-warning text-white">
    www.malasngoding.com
  </div>
</div>

    
  </div>
<br>
  <div class="card-group">
  <div class="card">
    <img src="assets/img/pos.jpg" class="card-img-top" alt="...">
    <div class="card-body bg-light">
      <h5 class="card-title"><center><b>Kader Posyandu Pilar Kesehatan</h5></center></b>
      <p class="card-text"><center>Beliau menyampaikan bahwa sebagai pilar dan ujung tombak dalam menjalankan program pemerintahan di bidang kesehatan, Kader Posyandu senantiasa menjadi fokus perhatian Pemerintah Daerah, perlu diperhatikan juga bahwa Kesehatan termasuk dalam empat faktor prioritas dalam Visi Misi Kabupaten Karawang 2010-2015, secara khusus ada pada misi pertama Pemkab Karawang yaitu  Meningkatkan Kualitas Kehidupan Masyarakat yang Cerdas, Sehat, Berbudaya dan Religius Harmonis.</p>
      <p class="card-text"><small class="text-muted">Diposting kemarin....</small></p></center>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/kader2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><center><b>Kader Posyandu di Rogojampi Ciptakan APE dari Bahan Bekas</h5></center></b>
      <p class="card-text"><center>APE yang dimaksud ini adalah alat permainan edukasi yang bisa dimainkan oleh anak usia 2-3 tahun.Para kader posyandu sangat antusias dalam kegiatan ini, dan para peserta memang menyiapkan bahan daur ulang, seperti plastik, kardus, kertas, dan bahan daur ulang lainnya.Kader taman posyandu Mawar asal Desa Gitik membuat inovasi APE berupa ‘Buku Pintar’ yang terbuat dari barang bekas seperti kain perca, kardus, sedotan, kotak nasi dan kertas lipat. Salah satu kader taman posyandu Mawar, Hariyani menjelaskan, buku pintar ini sangat berguna bagi anak-anak balita, sebab APE tersebut mencangkup semua aspek.</p>
      <p class="card-text"><small class="text-muted">Diposting 3 Jam Lalu</small></p></center>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/kader3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><center><h5><b>Inovasi Baru Posyandu</h5></center></b>
      <p class="card-text"><center>Desa cireunde merupakan salah satu Desa di Kecamatan Solear yang tingkat Persalinan Masyarakatnya masih banyak yang ditolong oleh Dukun Paraji, sehingga ini menjadi masalah yang harus disikapi dan ditindaklanjuti bersama, walaupun dalam kurun dua tahun terakhir tidak ada kematian ibu dan bayi akibat pertolongan persalinan oleh dukun paraji, tetapi ini menjadi masalah di saat kondisi pandemi covid-19. Menjadi  inovasi, yaitu Gerakan Bersama Kader Pendampingan Persalinan di Masa Pandemi Covid19 diharapkan dapat menurunkan angka kematian ibu dan bayi sekaligus menekan Penyebaran virus Covid 19 kepada ibu Hamil, ibu bersalin juga banyi Baru lahir.
</p>
      <p class="card-text"><small class="text-muted">Diposting 1 Januari 2022 pkl 10:00</small></p></center>
    </div>
  </div>
</div>

  <br>
<div class="card">
  <div class="card-header bg-info text-white">
    Tata Cara Validasi Kartu Tanda Mahasiswa :
    1. Siapkan Kartu Tanda Mahasiswa, 
    2. Kunjungi alamat website aplikasi validasi STMIK AMIK BANDUNG,
    3. Klik Saya Mahasiswa,
    4. Pilih Menu Validasi pada Menu Utama,
    5. Arahkan QR Qode yang terdapat pada Kartu Tanda Mahasiswa ke kamera,
    6. Tunggu Proses berlangsung,
    7. Validasi Kartu Tanda Mahasiswa berhasil.
  </div>

</br>
     

<footer>
      <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; STMIK AMIK BANDUNG 2021</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
</body>
</html>

