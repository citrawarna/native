<?php 
//disini hampir sama dengan insert data hanya saja querynya diubah menjadi update
include "../koneksi.php";

$id_stok = $_POST['id_stok'];
$id_barang = $_POST['id_barang'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];


$query = "UPDATE stok SET id_barang='$id_barang', stok='$stok', keterangan='$keterangan'
		WHERE id_stok = '$id_stok' ";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil diupdate'); location.href='../stok.php'</script>";
} else {
	echo "update gagal";
}
 ?>