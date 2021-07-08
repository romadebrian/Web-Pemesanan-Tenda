<?php
include ("../koneksi.php");

$IdPesanan				= $_GET ['Frm_Id_Pesanan'];
$NamaTenda				= $_GET ['Frm_Nama_Tenda'];
$TanggalSewa 			= $_GET ['Frm_Tanggal_Sewa'];
$TanggalPengembalian	= $_GET ['Frm_Tanggal_Pengambilan'];
$NamaPenyewa 			= $_GET ['Frm_Nama_Penyewa'];
$Harga 					= $_GET ['Frm_Harga'];
$StatusPembayaran 		= $_GET ['Frm_Status_Pembayaran'];

$query_data_nama_penyewa = mysqli_query($koneksi, "SELECT * FROM penyewa WHERE Nama_Penyewa = '$NamaPenyewa'");
$array_penyewa = mysqli_fetch_array($query_data_nama_penyewa);
$Nomor_Penyewa = $array_penyewa['No_Penyewa'];

$query = "INSERT INTO pesanan (ID_Pesanan, Nama_Tenda, Tanggal_Sewa, Tanggal_Pengembalian, No_Penyewa, Harga, Status_Pembayaran) VALUES ('$IdPesanan', '$NamaTenda', '$TanggalSewa', '$TanggalPengembalian', '$Nomor_Penyewa', '$Harga', '$StatusPembayaran')";
$execute = mysqli_query($koneksi, $query);
if ($execute) {
	header("location:pesanan.php");
}
else {
	echo 'data tidak berhasil';
}
?>
