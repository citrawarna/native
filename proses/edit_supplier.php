<?php 
//disini hampir sama dengan insert data hanya saja querynya diubah menjadi update
include "../koneksi.php";

$id_supplier = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];

$query = "UPDATE supplier SET nama_supplier='$nama_supplier', alamat='$alamat'
		WHERE id_supplier = '$id_supplier' ";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil diupdate'); location.href='../supplier.php'</script>";
} else {
	echo "update gagal";
}
 ?>