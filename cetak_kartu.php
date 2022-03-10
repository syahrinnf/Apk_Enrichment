<?php 
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
?>

<!DOCTYPE html>

<html>
<title>Pengelolaan Arsip Digital</title>
<head>
<link rel="icon" href="./assets/img/arsip.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
			font-family: times new roman;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}

.card {

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

  max-width: 200px;

  margin: auto;

  text-align: center;

  font-family: comic;

}

.title {

  color: grey;

  font-size: 18px;

}

button {

  border: none;

  outline: 0;

  display: inline-block;

  padding: 8px;

  color: white;

  background-color: #006400;

  text-align: center;

  cursor: pointer;

  width: 100%;

  font-size: 12px;

}

a {

  text-decoration: none;

  font-size: 20px;

  color: black;

}

button:hover, a:hover {

  opacity: 0.7;

}

</style>

</head>

<body>
	<br>
<h2 style="text-align:center">Kartu Petugas Kader Posyandu</h2>
<hr>
<br>
<div class="card">
<p><button><strong>KADER POSYANDU</button></p></strong>
  <?php
		$sql=mysqli_query($konek, "SELECT * FROM petugas WHERE id='$_GET[id]'");
		$d=mysqli_fetch_array($sql);
		?>
		<tr>
			<td colspan="3">
				<h3>Posyandu Flamboyan</h3>
			</td>
		</tr>
		<tr>
		<center><tr><td><img src="view_berkas.php?id=<?php echo $d['id']; ?>" width='95' height='90'/></tr></td></center>
			<tr><td><?php echo $d['nopetugas']; ?></h7></tr></td>
			<br>
            <tr><td><?php echo $d['jabatan']; ?></h7></tr></td>
			<br>
            <?php echo $d['nama_petugas']; ?></h7>
			<br>
			<td></td>
			<td><img src="temp/<?php echo $d['nopetugas'].".png"; ?>"</td>
			</td>
		</tr>
	</td>
</tr>
</table>
  <div style="margin: 9px 0;">
 </div>

 <p><button>PosyanduFlamboyan@gmail.com</button></p>

</div>
		
<br>
<center><a href="#" class="no-print" onclick="window.print();">Print</a></center>
</body>
</html>

<?php
}else{
	header('location:login.php');
}
?>