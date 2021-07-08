<html>
<head>
	<title>Form Input Pesanan</title>
</head>
<body>
<h3>Form Input Pesanan</h3>

<?php 
include ('../koneksi.php');
$query_SQL_penyewa = "SELECT * FROM penyewa";
$execute_data_penyewa = mysqli_query($koneksi, $query_SQL_penyewa);

//Fungsi untuk auto ID Pesanan
$query_SQL_pesanan = "SELECT max(ID_Pesanan) as maxKode FROM pesanan";
$execute_data_pesanan = mysqli_query($koneksi, $query_SQL_pesanan);
$array_data_pesanan = mysqli_fetch_array($execute_data_pesanan);
$kode_pesanan = $array_data_pesanan['maxKode'];

$Nomor_Urut_Kode_Pesanan = (int) substr($kode_pesanan, 3, 3);
$Nomor_Urut_Kode_Pesanan++;

$char = "PSN";
$kode_pesanan = $char . sprintf("%03s", $Nomor_Urut_Kode_Pesanan);

?>
<form method="get" action="proses_input_pesanan.php">
<table>
	<tr>
		<td>ID Pesanan</td>
		<td><input type="text" name="Frm_Id_Pesanan" value="<?php echo $kode_pesanan; ?>" readonly></td>
	</tr>
	<tr>
		<td>Nama Tenda</td>
		<td><input type="text" name="Frm_Nama_Tenda"></td>
	</tr>
	<tr>
		<td>Tanggal Sewa</td>
		<td><input type="text" name="Frm_Tanggal_Sewa" placeholder="2021-12-30"></td>
	</tr>
	<tr>
		<td>Tanggal Pengembalian</td>
		<td><input type="text" name="Frm_Tanggal_Pengambilan" placeholder="2021-12-30"></td>
	</tr>
	<tr>
    	<td> Nama Penyewa</td>
   		<td> <select name="Frm_Nama_Penyewa">
				<?php 
				while ($array_data_penyewa = mysqli_fetch_array($execute_data_penyewa))
				{
					echo "<option value='$array_data_penyewa[Nama_Penyewa]'> $array_data_penyewa[Nama_Penyewa] </option>";
				}
				?>
			 </select>
		</td>
    </tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="Frm_Harga"></td>
	</tr>
	<tr>
    	<td>Status Pembayaran</td>
        <td>
			<select name="Frm_Status_Pembayaran">
    			<option value="Lunas" selected> Lunas </option>
				<option value="Belum"> Belum </option>
			</select>
      	</td>
 	</tr>
</table>	
</br>

<input type="submit" name="Submit"> &nbsp
<a href="pesanan.php"> <button>Cancel</button></a>
</form>



</body>
</html>