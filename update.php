<?php 
// koneksi database
include 'koneksi.php';

 
// update data ke database
$id = $_GET['id'];
mysqli_query($koneksi,"update terjual set id_product='$id_product', nama_product='$nama_product', jenis_product='$jenis_product',' harga_product
	='$harga_product' where id_product='$id_product'");
while($d = mysqli_fetch_array($data)){
 
// mengalihkan halaman kembali ke index.php
header("location:daftar_penjualan.php");
 
?>