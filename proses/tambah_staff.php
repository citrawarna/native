<?php 

include "../koneksi.php";

$nama = $_POST['nama']; // menyimpan data nama pada field nama yang ada di form dan bawahnya juga spt itu
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$jabatan = $_POST['jabatan'];

//query insert
$query = "INSERT INTO staff (nama, tanggal, jenis, jabatan) VALUES 
('$nama', '$tanggal', '$jenis', '$jabatan')";
$sql = mysqli_query($connect, $query);

if($sql == true){
	echo "<script>alert('Data Berhasil ditambah'); location.href='../staff.php'</script>";
} else {
	echo "input gagal";
}

 ?>