<?php
include "koneksi.php";

$id_052 = $_POST['id_052'];
$nama_052 = $_POST['nama_052'];
$email_052 = $_POST['email_052'];
$alamat_052 = $_POST['alamat_052'];

$sql = "UPDATE tbl_052 set id_052= '$id_052', nama_052='$nama_052', email_052='$email_052', alamat_052='$alamat_052' where id_052=$id_052";
$hasilnya = mysqli_query($koneksi, $sql);
if (!$hasilnya) {
	echo "Eksekusi edit data gagal";
}else{
	echo "Eksekusi edit data berhasil<br>";
	echo "<a href='data_052.php'>Show data</a>";
}

?>