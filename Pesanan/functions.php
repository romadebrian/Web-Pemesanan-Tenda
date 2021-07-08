<?php 
$conn = mysqli_connect("localhost","root","","penyewaan_tenda");

function query($query)
{
	global $conn;

	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$rows[] = $row;
	}
	return $rows;
}

function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa 
	where 
	ID_Pesanan like '%$keyword%' or 
	Nama_Tenda  like '%$keyword%' 
		 ";
	return query($query);
}
?>
