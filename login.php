<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login || Mizha Store</title>
	<link rel="stylesheet" type="text/css" href="css/LOGIN.css">
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>MIZHA STORE</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">		
		</form>
		<?php
		if(isset($_POST['submit'])){
			session_start();
			include 'db.php';

			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$cek = mysqli_query($conn, "SELECT * FROM admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
			if(mysqli_num_rows($cek) > 0){
				$d = mysqli_fetch_object($cek);
				$_SESSION['status_login'] = true;
				$_SESSION['a_global'] = $d;
				$_SESSION['id'] = $d->admin_id;
	              echo '<script>window.location="index.html"</script>';
            }else{
            	  echo'<script>alert("username atau password anda salah !")</script>';
            }
		}
	?>
		
	</div>

</body>
</html>