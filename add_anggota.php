<?php 
include"koneksi.php";


$content = "layout/form_anggota.php";

session_start();
if(empty($_SESSION['username'])){
	echo "Silahkan login terlebih dahulu";
} else {
	require_once "layout/header.php"; 

	require_once $content; 
	
	require_once"layout/footer.php"; 
}

 ?>

