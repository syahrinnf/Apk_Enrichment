<html>

<head>
<title>Tutorial Upload/Download</title>
<?php
$view = isset($_GET['view']) ? $_GET['view'] : null;

switch($view){
	default:
	?>
<table class="table table-bordered table-striped" table id="example" style="width:100%">
				<thead>
					<tr>
						
						<th><center>Nomor Arsip</center></th>
						<th><center>Jenis Arsip</center></th>
						<th><center>Nama Arsip</th>
						<th><center>Tanggal Upload</center></th>
						<th><center>Aksi</th></center>
					</tr>
				    
				    <tbody>
					<?php
					$sql=mysqli_query($konek, "SELECT * FROM files ORDER BY id");
                    while($d=mysqli_fetch_array($sql)){
						    echo "<tr>
							<td>$d[id]</td>
							<td>$d[nomor_arsip]</td>
                            <td>$d[jenis_arsip]</td>
                            <td>$d[nama_arsip]</td>
                            <td>$d[tanggal_upload]</td>
							<td>$d[filetype]</td>
							<td>$d[filedata]</td>
							<td>$d[filename]</td>
							</td>
						</tr>";
						
					}
}
					?>
                    
                     </table>
			        </thead>
                    </body>
</html>