<?php 
include"koneksi.php"; //koneksi ke database

$content = "layout/view_barang.php"; // file yg ditampilkan pada halaman 

session_start(); //membuka session, apabila session tidak ada akan ada tulisan seperti dibawah
if(empty($_SESSION['username'])){
	echo "Silahkan login terlebih dahulu";
} else {
	require_once "layout/header.php"; //memanggil header page

	require_once $content; //memanggil content page yg sudah disimpan pada variabel diatas
	
	require_once"layout/footer.php"; // memanggil footer page
}

 ?>

