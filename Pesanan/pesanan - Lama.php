<h3> Daftar Pesanan </h3>
<?php
include ("../koneksi.php");

$query_tampil = "SELECT * FROM pesanan";
$execute = mysqli_query($koneksi, $query_tampil);
$total = mysqli_num_rows($execute);

echo "<a href='input_pesanan.php'><button>Input Pesanan</button></a>";

echo "<table border = 1 cellpadding='3'> <tr>
<th> ID Pesanan </th>
<th> Nama Tenda </th>
<th> Tanggal Sewa </th>
<th> Tanggal Pengembalian </th>
<th> Nama Penyewa </th>
<th> Harga </th>
<th> Status Pembayaran </th>
<th colspan='2'> Aksi </th>";

while ($data = mysqli_fetch_array($execute)){
	
	$query_data_nama_penyewa = mysqli_query($koneksi, "SELECT * FROM penyewa WHERE No_Penyewa = $data[No_Penyewa]");
	$array_penyewa = mysqli_fetch_array($query_data_nama_penyewa);
	
	echo "<tr>
	<td>$data[ID_Pesanan]</td>
	<td>$data[Nama_Tenda]</td>
	<td>$data[Tanggal_Sewa]</td>
	<td>$data[Tanggal_Pengembalian]</td>
	<td>$array_penyewa[Nama_Penyewa]</td>
	<td>$data[Harga]</td>
	<td>$data[Status_Pembayaran]</td>
	<td><a href = \"edit_pesanan.php?id=$data[ID_Pesanan]\">Edit</a></td>
	<td><a href = \"proses_hapus_pesanan.php?id=$data[ID_Pesanan]\">Hapus</a></td>
</tr>";}
echo"<table>";
echo"<script src ='js/script.js'></script>";
?>