<?php 
//disini hampir sama dengan insert data hanya saja querynya diubah menjadi update
include "../koneksi.php";

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];

$query = "UPDATE anggota SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', 
		jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', no_telp='$no_telp', status='$status' 
		WHERE id_anggota = '$id_anggota' ";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil diupdate'); location.href='../anggota.php'</script>";
} else {
	echo "update gagal";
}
 ?>