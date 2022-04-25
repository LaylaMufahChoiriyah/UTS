<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM tbl_052 WHERE id_052=$id";
$hasilnya = mysqli_query($koneksi, $sql);
if (!$hasilnya) {
	echo "Delete data gagal";
}else{
	echo "Delete data berhasil";
	echo "<br>";
	echo "<a href='data_052.php'> Show Data </a>";
}

?>