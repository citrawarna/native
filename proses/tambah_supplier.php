<?php 
//ini adalah coding untuk menambah data supplier
include "../koneksi.php";

$nama_supplier = $_POST['nama_supplier']; 
$alamat = $_POST['alamat'];


//query insert
$query = "INSERT INTO supplier (nama_supplier, alamat) VALUES 
('$nama_supplier', '$alamat')";
$sql = mysqli_query($connect, $query);

//apabila berhasil atau gagal
if($sql == true){
	echo "<script>alert('Data Berhasil ditambah'); location.href='../supplier.php'</script>";
} else {
	echo "input gagal";
}

 ?>