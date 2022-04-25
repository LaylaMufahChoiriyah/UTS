<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_layla";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi) {
	echo "Koneksi gagal";
}else{
	echo "";
}

?>