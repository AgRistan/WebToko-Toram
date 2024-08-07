<!DOCTYPE html>
<html>
<head>
	<title>Data Informasi Terjual</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="tabel.css">
	<link rel="stylesheet" type="text/css" href="tabelinfo.css">
 
	<h2>Data Informasi Terjual</h2>
	<br/>
	<a href="daftar_penjualan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id_product = $_GET['id_product'];
	$data = mysqli_query($koneksi,"select * from terjual where id_product='$id_product'");
	while($d = mysqli_fetch_array($data)){
		?>

<form method="post" action="update.php">
			<table>
				<tr>			
					<td>ID_Product</td>
					<td>
						<input type="hidden" number="id_product" value="<?php echo $d['id_product']; ?>">
						<input type="text" name="nama_product" value="<?php echo $d['nama_product']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Product</td>
					<td><input type="text" name="nama_product" value="<?php echo $d['nama_product']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Product</td>
					<td><input type="text" name="jenis_product" value="<?php echo $d['jenis_product']; ?>"></td>
				</tr>
				<tr>
					<td>Harga Product</td>
					<td><input type="text" name="harga_product" value="<?php echo $d['harga_product']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
		}
	?>
 
</body>
</html>