<?php

include('koneksi.php');
extract($_REQUEST);
mysqli_query($konek, "DELETE FROM petugas WHERE id='$id'");
$hapus=mysqli_query($hapus,$konek);
if(!$hapus){
	echo"Gagal dihapus=".mysqli_error();

}else{
	echo "<script>
 alert('Berhasil Dihapus');
 </script>";
}



    

header("location:data_mahasiswa.php?pesan=delete");
?>

</body>
</html>