<?php 

include "../koneksi.php";

$nama_barang = $_POST['nama_barang']; // menyimpan data nama_barang pada field nama_barang yang ada di form dan bawahnya juga spt itu
$id_kategori = $_POST['id_kategori'];
$id_supplier = $_POST['id_supplier'];
$kemasan = $_POST['kemasan'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$expired_date = $_POST['expired_date'];

//query insert
$query = "INSERT INTO barang (nama_barang, id_kategori, id_supplier, kemasan, harga_beli, harga_jual, expired_date) VALUES 
('$nama_barang', '$id_kategori', '$id_supplier', '$kemasan', '$harga_beli', '$harga_jual', '$expired_date')";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil ditambah'); location.href='../barang.php'</script>";
} else {
	echo "input gagal";
}


 ?>