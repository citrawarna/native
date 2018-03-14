<?php 

include "../koneksi.php";

$id_barang = $_POST['id_barang']; 
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];

//query insert
$query = "INSERT INTO stok (id_barang, stok, keterangan) VALUES 
('$id_barang', '$stok', '$keterangan')";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil ditambah'); location.href='../stok.php'</script>";
} else {
	echo "input gagal";
}

 ?>