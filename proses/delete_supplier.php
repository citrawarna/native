<?php 
include "../koneksi.php";

$id_supplier = $_GET['id_supplier'];
$query = "DELETE FROM supplier WHERE id_supplier = '$id_supplier'";

$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil dihapus'); location.href='../supplier.php'</script>";
} else {
	echo "hapus gagal";
}

 ?>