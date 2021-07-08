<?php
include ("../koneksi.php");

$NomorPenyewa	= $_GET ['Frm_Nomor_Penyewa'];
$NamaPenyewa 	= $_GET ['Frm_Nama_Penyewa'];
$NomorHandphone	= $_GET ['Frm_Nomor_Handphone'];
$Email 			= $_GET ['Frm_Email'];
$Alamat 		= $_GET ['Frm_Alamat'];

$query_SQL = "UPDATE penyewa SET Nama_Penyewa = '$NamaPenyewa', No_HP = '$NomorHandphone', Email = '$Email', Alamat = '$Alamat' WHERE penyewa.No_Penyewa = $NomorPenyewa";
$execute = mysqli_query($koneksi, $query_SQL);
if ($execute) {
	header("location:penyewa.php");
}
else {
	echo 'data tidak berhasil';
}
?>
