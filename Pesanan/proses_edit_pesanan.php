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

$query_update_pesanan = "UPDATE pesanan SET Nama_Tenda = '$NamaTenda', Tanggal_Sewa = '$TanggalSewa', Tanggal_Pengembalian = '$TanggalPengembalian', No_Penyewa = '$Nomor_Penyewa', Harga = '$Harga', Status_Pembayaran = '$StatusPembayaran' WHERE pesanan.ID_Pesanan = '$IdPesanan'";
$execute = mysqli_query($koneksi, $query_update_pesanan);
if ($execute) {
	header("location:pesanan.php");
}
else {
	echo 'data tidak berhasil';
}
?>
