<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_product = $_GET['id_product'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from terjual where id_product='$id_product'");
 
// mengalihkan halaman kembali ke index.php
header("location:daftar_penjualan.php");
 
?>