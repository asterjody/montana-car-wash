<?php 
// koneksi database
include_once 'db_connection.php';
 
// menangkap data yang di kirim dari form
$id_member = $_POST['id_member'];
$password = $_POST['password'];
// query SQL untuk insert data ke dalam Mysql
$sql = "UPDATE `member` SET `password` = '$password' WHERE `member`.`id_member` = '$id_member'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman member_admin.php
echo "<script>alert('Password Anda Berhasil Diganti');window.location='halaman_member.php'</script>";
?>