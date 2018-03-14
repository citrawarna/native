<?php 
	//include digunakan untuk memanggil script dari file lain, jadi variabel method dan sebagainya bisa digunakan
	include"koneksi.php"; 
	include"config.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - PHP Native</title>
	<link rel="stylesheet" href="<?= $base_url. 'css/bootstrap.css' ?>">
</head>
<body class="bg-danger">
<br><br>
	<div class="row justify-content-center">		
		<div class="col-md-6 bg-light">
			<!-- base url adalah alamat dari web yaitu localhost/php_native 
				proses adalah direktori(folder) yang memproses setelah form di submit
				login.php adalah source code yang mengeksekusi dari form yg diinput user
			-->
			<form action="<?= $base_url. 'proses/login.php' ?>" method="post">
				<h1 align="center">Login Form</h1>
				<strong>Username</strong>
				<input type="text" class="form-control" name="username">

				<strong>Password</strong>
				<input type="password" class="form-control" name="password">
				<br>
				<input type="submit" class="btn btn-block" value="LOGIN">
				<br>
			</form>
		</div>
	</div>
</body>
</html>