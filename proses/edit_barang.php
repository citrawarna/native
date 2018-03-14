<?php 
//disini hampir sama dengan insert data hanya saja querynya diubah menjadi update
include "../koneksi.php";

$id_barang = $_POST['id_barang'];
$id_kategori = $_POST['id_kategori'];
$id_supplier = $_POST['id_supplier'];
$nama_barang = $_POST['nama_barang'];
$kemasan = $_POST['kemasan'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$expired_date = $_POST['expired_date'];


$query = "UPDATE barang SET id_kategori='$id_kategori', id_supplier='$id_supplier', nama_barang='$nama_barang', 
		kemasan='$kemasan', harga_beli='$harga_beli', harga_jual='$harga_jual', expired_date='$expired_date' 
		WHERE id_barang = '$id_barang' ";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil diupdate'); location.href='../barang.php'</script>";
} else {
	echo "update gagal";
}
 ?>