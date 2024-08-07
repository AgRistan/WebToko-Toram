<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2> TAMBAH </h2>
	<br/>
	<a href="daftar_penjualan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>ID Product</td>
				<td><input type="number" name="id_product"></td>
			</tr>
			<tr>			
				<td>Nama Product</td>
				<td><input type="text" name="nama_product"></td>
			</tr>
			<tr>
				<td>Jenis Product</td>
				<td><input type="text" name="jenis_product"></td>
			</tr>
			<tr>
				<td>Harga Product</td>
				<td><input type="text" name="harga_product"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>