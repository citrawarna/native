<?php 

//fungsi untuk membuat logout
session_start();
session_destroy();
header('location:../index.php');
 ?>