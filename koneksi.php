<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'native';

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Koneksi ke database gagal'); 

?>