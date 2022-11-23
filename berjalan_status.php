<?php 
// koneksi database
include_once 'db_connection.php';
$id_antrian = $_GET['id_antrian'];
$sql ="SELECT * FROM antrian WHERE id_antrian= '$id_antrian'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$status_antrian = 'Berjalan';
// query SQL untuk insert data ke dalam Mysql
$sql = "UPDATE antrian SET status_antrian = '$status_antrian' WHERE id_antrian = '$id_antrian'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman antrian_admin.php
echo "<script>alert('Status Antrian Sudah Diubah Menjadi BERJALAN');window.location='antrian_admin.php'</script>";
?>