<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data 052</title>
</head>
<body>
	<h1>Data 052</h1>
<table width="60%" border="1" cellspacing="1">
	<tr>
		<td><b>ID_052</b></td>
		<td><b>Nama_052</b></td>
		<td><b>Email_052</b></td>
		<td><b>Alamat 052</b></td>
		<td><b>Action</b></td>
	</tr>
		<?php
		include 'koneksi.php';

		$sql = "SELECT * FROM tbl_052";
		$hasil = mysqli_query($koneksi, $sql);

		while ($row = mysqli_fetch_array($hasil)) 
		{
		?> 
		<tr>
			<td><?=$row['id_052'];?></td>
			<td><?=$row['nama_052'];?></td>
			<td><?=$row['email_052'];?></td>
			<td><?=$row['alamat_052'];?></td>
			<td><a href="edit.php?id=<?=$row['id_052']?>">Edit</a> | <a href="delete.php?id=<?=$row['id_052']?>">Delete</td>
		</tr>
		<?php }
		?>
</table>
<h3><a href="tambah.php">Tambah Data</a></h3>
</body>
</html>