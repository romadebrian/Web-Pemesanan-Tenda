<?php
include ("../koneksi.php");

$NamaPenyewa	= $_GET ['Frm_Nama_Penyewa'];
$NomorHandphone	= $_GET ['Frm_Nomor_Handphone'];
$Email 			= $_GET ['Frm_Email'];
$Alamat 		= $_GET ['Frm_Alamat'];

$query = "INSERT INTO penyewa (Nama_Penyewa, No_HP, Email, Alamat) VALUES ('$NamaPenyewa', '$NomorHandphone', '$Email', '$Alamat')";
$execute = mysqli_query($koneksi, $query);
if ($execute) {
	header("location:penyewa.php");
}
else {
	echo 'data tidak berhasil';
}
?>
