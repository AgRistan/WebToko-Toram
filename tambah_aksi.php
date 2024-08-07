<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_product = $_POST['id_product'];
$nama_product = $_POST['nama_product'];
$jenis_product = $_POST['jenis_product'];
$harga_product = $_POST['harga_product'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into terjual values('$id_product','$nama_product','$jenis_product','$harga_product')");
 
// mengalihkan halaman kembali ke index.php
header("location:daftar_penjualan.php");
 
?>