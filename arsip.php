<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Arsip</title>
    <?php
include ("koneksi.php"); 
?>
    <?php
$view = isset($_GET['view']) ? $_GET['view'] : null;

switch($view){
	default:
}
	?>

<div class="row">
			</div>
			<div class="panel-body">
			<a class="btn btn-danger" style="margin-bottom: 10px" href="data_mahasiswa.php?view=tambah"><span class='material-icons'>
                               <img src='assets/img/person_add_white_24dp(2).svg' /><b>Tambah Data</b></span></a>
			<table class="table table-bordered table-striped" table id="example" style="width:100%">
				<thead>
					<tr>
						
						<th><center>nomor arsip</center></th>
						<th><center>Jenis arsip</center></th>
						<th><center>Nama arsip</th>
						<th><center>tahun</center></th>
						<th><center>Aksi</th></center>
					</tr>
				    </center>
				    <tbody>
					<?php
					$data=mysql_query($konek, "SELECT * FROM files order by id");
					
					while($row=mysql_fetch_array($data)){
						    echo "<tr>
                            <td width='40px' align='center'>$data[id]</td>
							<td>$data[nomor_arsip]</td>
							<td>$data[jenis_arsip]</td>
							<td>$data[nama_asip]</td>
                            <td>$data[filetype]</td>
							<td>$data[filedata]</td>
							<td>$data[filename]</td>
							<td width='150px' align='center'>

							<a class='btn btn-primary btn-sm ' href='buatQRCode.php?nama=$d[nama_petugas]&nomor=$d[nopetugas]'>QR<span class='material-icons'>
                            <img src='assets/img/qr_code_2_black_24dp.svg' /></span></a>
                            <a class='btn btn-warning btn-sm' href='cetak_ijazah.php?id=$d[id]' target='_blank'>Print<span class='material-icons'>
                            <img src='assets/img/print_black_24dp.svg' /></span></a>

							<a class='btn btn-secondary btn-sm' href='edit.php?id=$d[id]'>Edit<span class='material-icons'>
                            <img src='assets/img/update_black_24dp.svg' /></span></a>

							<a class='btn btn-danger btn-sm' href='delete.php?id=$d[id]&id=$d[id]'>Del<span class='material-icons'>
                            <img src='assets/img/delete_black_24dp.svg' /></span></a>


							</td>
						</tr>";
						
					}
					?>
                    	</thead>
				<script>
					$(document).ready(function() {
    $('#example').DataTable();
} );
			</table>
			</div>
		</div>
	</div>
	<script type="https://code.jquery.com/jquery-3.5.1.js">
<script type="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
<script type="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js>


