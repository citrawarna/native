<?php 
include "../koneksi.php";

$id_staff = $_GET['id_staff'];
$query = "DELETE FROM staff WHERE id_staff = '$id_staff'";

$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil dihapus'); location.href='../staff.php'</script>";
} else {
	echo "hapus gagal";
}

 ?>