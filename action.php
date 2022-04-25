<?php
include "koneksi.php";

$id_052 = $_POST['id_052'];
$nama_052 = $_POST['nama_052'];
$email_052 = $_POST['email_052'];

$sql = "INSERT INTO tbl_052(id_052, nama_052, email_052, alamat_052) VALUES ('$id_052','$nama_052','$email_052', 'alamat_052')";
$hasilnya = mysqli_query($koneksi, $sql);
if (!$hasilnya) {
	echo "Eksekusi tambah data gagal";
}else{
	echo "Eksekusi tambah data berhasil<br>";
	echo "<a href='data_052.php'>Show data</a>";
}

?>