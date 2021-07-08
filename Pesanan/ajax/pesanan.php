<?php 
include ("../../koneksi.php");
require '../functions.php';

$keyword = $_GET["keyword"];


$query = "SELECT * FROM pesanan 
where 
ID_Pesanan like '%$keyword%' or 
Nama_Tenda  like '%$keyword%' 
     ";
$query_SQL_ajax_pesanan = query($query);



echo "<table border = 1 cellpadding='3'> <tr>
<th> ID Pesanan </th>
<th> Nama Tenda </th>
<th> Tanggal Sewa </th>
<th> Tanggal Pengembalian </th>
<th> Nama Penyewa </th>
<th> Harga </th>
<th> Status Pembayaran </th>
<th colspan='2'> Aksi </th>";

$i = 1;
foreach ($query_SQL_ajax_pesanan as $row) :

$query_data_nama_penyewa = mysqli_query($koneksi, "SELECT * FROM penyewa WHERE No_Penyewa = $row[No_Penyewa]");
$array_penyewa = mysqli_fetch_array($query_data_nama_penyewa);

echo "<tr>
	<td>$row[ID_Pesanan]</td>
	<td>$row[Nama_Tenda]</td>
	<td>$row[Tanggal_Sewa]</td>
	<td>$row[Tanggal_Pengembalian]</td>
	<td>$array_penyewa[Nama_Penyewa]</td>
	<td>$row[Harga]</td>
	<td>$row[Status_Pembayaran]</td>
	<td><a href = \"edit_pesanan.php?id=$row[ID_Pesanan]\">Edit</a></td>
	<td><a href = \"proses_hapus_pesanan.php?id=$row[ID_Pesanan]\">Hapus</a></td>
</tr>";
$i++;
endforeach;
echo"<table>";
?>