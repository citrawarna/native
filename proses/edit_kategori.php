<?php 
//disini hampir sama dengan insert data hanya saja querynya diubah menjadi update
include "../koneksi.php";

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$query = "UPDATE kategori SET nama_kategori='$nama_kategori'
		WHERE id_kategori = '$id_kategori' ";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil diupdate'); location.href='../kategori.php'</script>";
} else {
	echo "update gagal";
}
 ?>