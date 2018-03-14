<?php 
include "../koneksi.php";

$id_anggota = $_GET['id_anggota'];
$query = "DELETE FROM anggota WHERE id_anggota = '$id_anggota'";

$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil dihapus'); location.href='../anggota.php'</script>";
} else {
	echo "hapus gagal";
}

 ?>