	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from terjual where id_product='$id_product'");
	while($d = mysqli_fetch_array($data)){
		?>