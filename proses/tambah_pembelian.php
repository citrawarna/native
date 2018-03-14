<?php 

include "../koneksi.php";

$id_barang = $_POST['id_barang'];
$id_supplier = $_POST['id_supplier'];
$jumlah = $_POST['jumlah'];
$jatuh_tempo = $_POST['jatuh_tempo'];

$stok = mysqli_query($connect, "SELECT * FROM stok inner join barang on barang.id_barang=stok.id_barang where stok.id_barang='$id_barang' ");
$row = mysqli_fetch_array($stok);
$sisa_stok = $row['stok'] + $jumlah;

$total = $row['harga_beli'] * $jumlah;

$query = "INSERT INTO pembelian values ('', '$id_supplier', '$id_barang', '$jumlah', '$total', '$jatuh_tempo')";
$sql = mysqli_query($connect, $query);

$q_stok = mysqli_query($connect, "UPDATE stok SET stok = '$sisa_stok' WHERE id_barang = '$id_barang'");

if($sql == true && $q_stok == true){
	echo "<script>alert('Data Pembelian berhasil ditambah'); location.href='../pembelian.php' </script>";
} else {
	echo "input gagal";
}

 ?>