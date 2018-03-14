<?php 

include "../koneksi.php";

$id_barang = $_POST['id_barang']; // menyimpan data nama pada field nama yang ada di form dan bawahnya juga spt itu
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$id_anggota = $_POST['id_anggota'];

$stok = mysqli_query($connect, "SELECT * FROM stok inner join barang on barang.id_barang=stok.id_barang where stok.id_barang='$id_barang' ");
$row = mysqli_fetch_array($stok);
$sisa_stok = $row['stok'] - $jumlah;

$profit = $row['harga_jual'] - $row['harga_beli'];
//input penjualan
$query = "INSERT INTO penjualan (id_barang, id_anggota, jumlah, profit, keterangan) values ('$id_barang', '$id_anggota', '$jumlah', '$profit', '$keterangan')";
$sql = mysqli_query($connect, $query);

//update stok di table stock
$q_stok = mysqli_query($connect, "UPDATE stok set stok = '$sisa_stok' WHERE id_barang= '$id_barang'");

if($sql == true && $q_stok == true){
	echo "<script>alert('Data Penjualan berhasil ditambah'); location.href='../penjualan.php' </script>";
} else {
	echo "input gagal";
}
 ?>