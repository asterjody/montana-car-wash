<?php 
// koneksi database
include 'db_connection.php';
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$email = $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message'];
// menginput data ke database
mysqli_query($conn,"INSERT INTO `kritiksaran` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_member.php");
 
?>