<?php

include('koneksi.php');
extract($_REQUEST);
mysqli_query($konek, "DELETE FROM files WHERE id='$id'");
$hapus=mysqli_query($hapus,$konek);
if(!$hapus){
	echo"Gagal dihapus=".mysqli_error();

}else{
	echo "<script>
 alert('Berhasil Dihapus');
 </script>";
}



    

header("location:arsip_menu.php?pesan=delete");
?>

</body>
</html>