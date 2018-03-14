<?php 

include "../koneksi.php";

$nama_kategori = $_POST['nama_kategori'];

$query = "INSERT INTO kategori (nama_kategori) values ('$nama_kategori')";
$sql = mysqli_query($connect, $query);

//apabila berhasil atau gagal
if($sql == true){
	echo "<script>alert('Data Berhasil ditambah'); location.href='../penjualan.php' </script>";
} else {
	echo "input gagal";
}

 ?>