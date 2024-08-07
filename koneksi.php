<?php 
$koneksi = mysqli_connect("localhost","root","","toram");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>