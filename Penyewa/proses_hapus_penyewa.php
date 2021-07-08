<?php
include ("../koneksi.php");

$NomorPenyewa = $_GET['Nomor'];

$query_SQL = "delete from penyewa where No_Penyewa='$NomorPenyewa'";
$execute = mysqli_query($koneksi, $query_SQL);

if ($execute) {
	header("location:penyewa.php");
}
else {
	echo 'data tidak berhasil';
}
?>
