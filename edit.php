<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Edit 052</title>
</head>
<body>
<?php
	include 'koneksi.php'; 
	$id = $_GET['id'];
	$sql = "SELECT * FROM tbl_052 WHERE id_052=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if (!$hasil){
		echo "Query Salah";
	}

	?>
	<h1>Form Edit 052</h1>
	<?php
	while ($row = mysqli_fetch_array($hasil)) 
	{
	?>

		<form method="post" action="update.php">
			<input type="hidden" name="id" value="<?php echo $row['id_052']?>">
			Id 052 : <input type="text" name="id_052" value="<?php echo $row['id_052']?>"><br><br>
			Nama 052 : <input type="text" name="nama_052" value="<?php echo $row['nama_052']?>"><br><br>
			Email 052 : <input type="text" name="email_052" value="<?php echo $row['email_052']?>"><br><br>
			Alamat 052 : <input type="text" name="alamat_052" value="<?php echo $row['alamat_052']?>"><br><br>
			<button type="submit">Update</button>
		</form>
<?php }?>
</body>
</html>