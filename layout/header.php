<?php 
$url = $_SERVER['REQUEST_URI'];
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard - <?php if($url == '/php_native/anggota.php' || $url == '/php_native/add_anggota.php') { echo "Anggota"; }?>

	</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	  <a class="navbar-brand" href="template.php">Dashboard</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link <?php if($url == '/php_native/anggota.php' || $url == '/php_native/add_anggota.php') { echo "active"; } ?>" href="anggota.php">Anggota </a>
	      <a class="nav-item nav-link" href="staff.php">Staff</a>
	      <a class="nav-item nav-link" href="kategori.php">Kategori</a>
	      <a class="nav-item nav-link" href="supplier.php">Supplier</a>
	      <a class="nav-item nav-link" href="barang.php">Barang</a>
	      <a class="nav-item nav-link" href="stok.php">Stok</a>
	      <a class="nav-item nav-link" href="penjualan.php">Penjualan</a>
	      <a class="nav-item nav-link" href="pembelian.php">Pembelian</a>
	    </div>
	    <div class="navbar-nav" align="right">
	      <a class="btn btn-outline-dark" href="proses/logout.php">Logout </a>
	 
	    </div>
	    
	  </div>
	</nav>