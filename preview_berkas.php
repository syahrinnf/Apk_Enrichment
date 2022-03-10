<?php 
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/arsip.jpg">
    <title>Pengelolaan Arsip Digital</title>
</head>
<body>
            <!-- <div class="pull-left">DOKUMEN PDF</div> -->
            <div>
        </div>
        <?php
		  $sql = mysqli_query($konek,"SELECT * from files WHERE id='".$_GET['id']."'");
          $d = mysqli_fetch_array($sql);
		?>
		<tr>

        <td><embed type= "application/pdf" src="preview_berkas2.php?id=<?php echo $d['id']; ?>" width='1500' height='1000'></embed></td>
     

<!--<embed type="application/pdf" src="assets/file/BALKOT.pdf" width="600" height="400"></embed>-->





                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>