<?php 
include "../config.php";
include "../koneksi.php";

$username = $_POST['username']; //menyimpan data dari form yang kita beri atribute username pada form login
$password = sha1($_POST['password']); // sama seperti username hanya di tambahkan enkripsi SHA1 agar password tidak diketahui

//memcocokan data apakah ada record yg sesuai diinputkan oleh user di table user pada database
$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$row = mysqli_fetch_array($login); // menjadikan record di database berupa array

$url = '../template.php'; // untuk menuju link jika user berhasil login

//jika username dan password ada datanya, maka session akan dibuka, dan menuju halaman admin
if($row['username'] == $username AND $row['password'] == $password){
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	header("location:$url");
} else {
	//bila tidak ada akan ada alert dan user akan dikembalikan ke form login
	echo "<script>alert('username atau password salah'); location.href='../index.php'</script>";

}

 ?>