<h3> Data Penyewa </h3>

<a href="input_penyewa.php"><button>Input Penyewa</button></a>
<?php
include ("../koneksi.php");

$query_tampil = "SELECT * FROM penyewa";
$execute = mysqli_query($koneksi, $query_tampil);
$total = mysqli_num_rows($execute);

echo "<table border = 1 cellpadding='3'> <tr>
<th> Nomor Penyewa </th>
<th> Nama Penyewa </th>
<th> Nomor Handphone </th>
<th> Email </th>
<th> Alamat </th>
<th colspan='2'> Aksi </th>";
while ($data = mysqli_fetch_array($execute)){
	echo "<tr>
	<td>$data[No_Penyewa]</td>
	<td>$data[Nama_Penyewa]</td>
	<td>$data[No_HP]</td>
	<td>$data[Email]</td>
	<td>$data[Alamat]</td>
	<td><a href = \"edit_penyewa.php?Nomor=$data[No_Penyewa]\">Edit</a></td>
	<td><a href = \"proses_hapus_penyewa.php?Nomor=$data[No_Penyewa]\">Hapus</a></td>
</tr>";}
echo"<table>";
?>