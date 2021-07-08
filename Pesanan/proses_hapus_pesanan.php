<?php
include ("../koneksi.php");

$IdPesanan = $_GET['id'];

$query = "delete from pesanan where ID_Pesanan = '$IdPesanan'";
$execute = mysqli_query($koneksi, $query);

if ($execute) {
	header("location:pesanan.php");
}
else {
	echo 'data tidak berhasil';
}
?>
