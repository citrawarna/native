<?php 
include "../koneksi.php";

$id_kategori = $_GET['id_kategori'];
$query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";

$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil dihapus'); location.href='../kategori.php'</script>";
} else {
	echo "hapus gagal";
}

 ?>