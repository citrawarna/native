<?php 
//ini adalah coding untuk menambah data anggota
include "../koneksi.php";

$nama = $_POST['nama']; // menyimpan data nama pada field nama yang ada di form dan bawahnya juga spt itu
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];

//query insert
$query = "INSERT INTO anggota (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, email, no_telp, status) VALUES 
('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$email', '$no_telp', '$status')";
$sql = mysqli_query($connect, $query);

//apabila berhasil atau gagal
if($sql == true){
	echo "<script>alert('Data Berhasil ditambah'); location.href='../anggota.php'</script>";
} else {
	echo "input gagal";
}

 ?>