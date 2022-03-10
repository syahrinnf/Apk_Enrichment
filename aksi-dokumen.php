<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ("koneksi.php"); //file koneksi.php yg dibbuat di langkah no 1
if ($_POST) {
$filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'), $_FILES['berkas']['size']));
$tipe  = $_FILES['berkas']['type'];
$ukuran = $_FILES['berkas']['size'];
$nama_file = $_FILES['berkas']['name'];
$username= $_POST['username'];
$password = $_POST['password'];
$nama= $_POST['nama_mhs'];
$npm= $_POST['npm'];
$result = mysqli_query ($konek, "INSERT INTO tb_user values ('','$username','$password','$nama','$npm','$tipe','$filedata','$nama_file',$ukuran)") or die(mysql_error());
if ($result) echo "Upload sukses"; } ?>

<form enctype="multipart/form-data" method="post" >
<td width="160"><strong>Username</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="username" required /></div>
						</td>
						</tr>
						<br>
      <tr>    
	  <td width="160"><strong>Password</td></strong>
						<td>
                        <div class="col-md-25"><input class="form-control" type="text" name="password" required /></div>
				
				</td>
</tr>
						<br>
      <tr>    
	  <td width="160"><strong>Nama</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="nama_mhs" required /></div>
						</td>
						</tr>
                        <tr>    
	  <td width="160"><strong>Npm</td></strong>
						<td>
						<div class="col-md-25"><input class="form-control" type="text" name="npm" required /></div>
						</td>
						</tr>
</tr>

<tr>
<td><strong>Upload File</td></strong>
<td><input type="file" name="berkas" /></td>
</tr>
<br>
<tr>
<td></td>
<button type="submit" value="Upload" class="btn btn-primary"><i class="fa fa-book"></i> &nbsp;Upload</button>&nbsp;
<button type="submit" name="back" value="back" class="btn btn-danger"><i class="fa fa-delete"></i> &nbsp;Cancel</button>&nbsp;
</tr>
</form>
</body>
</html>


