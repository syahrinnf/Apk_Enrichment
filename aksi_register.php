
<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<!--<script type="text/javascript">
    
Swal.fire('Data Berhasil Disimpan');
</script>-->
</body>
</html>
<?php
include 'koneksi.php';

// jika ada get act
if(isset($_POST['username'])){

	//proses simpan data
		//variabel dari elemen form
		$username  = $_POST['username'];
		$password	= $_POST['password'];
		$pass = ($password);
		$nama	= $_POST['nama_petugas'];
        $email	= $_POST['email'];
	
		//proses simpan data admin
			mysqli_query($konek, "INSERT INTO tb_user(username,password,nama_petugas,email)
			VALUES ('$username','$pass','$nama','$email')");
			

		if($username=='' || $password=='' || $nama=='' || $email==''){
			header('location:login.php');
		
}else{
	header('location:login.php');
}
}
?>