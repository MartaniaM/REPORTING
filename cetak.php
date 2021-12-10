<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI TABEL MAHASISWA</title>
</head>
<body>
 
	<center>
 
		<h2>DATA MAHASISWA</h2>
		<h4>MARTANIA MELANY</h4>
        <h4>1800018356</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
		</tr>
		<?php 
		$sql = mysqli_query($con,"select * from mahasiswa");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jkel']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgllhr']; ?></td>
            <td><?php echo $data['jkel']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>