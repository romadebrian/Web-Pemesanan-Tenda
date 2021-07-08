<html>
<head>
	<title>Edit Data Penyewa</title>
</head>
<body>
<h3>Form Edit Data Penyewa</h3>

<form method="get" action="proses_edit_penyewa.php">
<table>
	<tr>
		<td>Nomor Penyewa</td>
		<td><input type="text" name="Frm_Nomor_Penyewa" value="<?php $Nomor=$_GET['Nomor']; echo "$Nomor"; ?>" Readonly></td>
	</tr>
	<tr>
		<td>Nama Penyewa</td>
		<td><input type="text" name="Frm_Nama_Penyewa"></td>
	</tr>
	<tr>
		<td>Nomor Handphone</td>
		<td><input type="text" name="Frm_Nomor_Handphone"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="Frm_Email"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="Frm_Alamat"></td>
	</tr>
</table>	
</br>
<input type="submit" name="Submit"> &nbsp
<a href="penyewa.php"> <button>Cancel</button></a>
</form>



</body>
</html>