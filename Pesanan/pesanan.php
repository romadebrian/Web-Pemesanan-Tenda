<h3> Daftar Pesanan </h3>
<?php
include ("../koneksi.php");

//fungsi Ajax cari data
require 'functions.php';
$query_SQL_ajax_pesanan = mysqli_query($koneksi, "SELECT * FROM pesanan");

if (isset($_POST["cari"]))
{
	$query_SQL_ajax_pesanan = cari($_POST["keyword"]);
}

echo "	<form action='' method='post'>
			<input type='text' name='keyword' size='50' autofocus
			placeholder='Masukan data pencarian ID Pesanan / Nama Tenda' autocomplete='off' id='keyword'>
			<button type='submit' name = 'cari' id='tombol-cari'>Cari</button>
		</form>";

echo "<a href='input_pesanan.php'><button>Input Pesanan</button></a>";

echo "<div id='container'>";

echo "<table border = 1 cellpadding='3'> <tr>
<th> ID Pesanan </th>
<th> Nama Tenda </th>
<th> Tanggal Sewa </th>
<th> Tanggal Pengembalian </th>
<th> Nama Penyewa </th>
<th> Harga </th>
<th> Status Pembayaran </th>
<th colspan='2'> Aksi </th>";

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

endforeach;
echo"<table>";
echo"</div>";
echo"<script src ='js/script.js'></script>";
?>
