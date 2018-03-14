<?php 
//disini hampir sama dengan insert data hanya saja querynya diubah menjadi update
include "../koneksi.php";

$id_staff = $_POST['id_staff'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$jabatan = $_POST['jabatan'];


$query = "UPDATE staff SET nama='$nama', tanggal='$tanggal', jenis='$jenis', jabatan='$jabatan'
		WHERE id_staff = '$id_staff' ";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil diupdate'); location.href='../staff.php'</script>";
} else {
	echo "update gagal";
}
 ?>