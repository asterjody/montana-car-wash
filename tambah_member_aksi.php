<?php 
// koneksi database
include 'db_connection.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama_member = $_POST['nama_member'];
$nohp_member = $_POST['nohp_member'];
$jenis_member = $_POST['jenis_member'];
$mobil1_member = $_POST['mobil1_member'];
$platnomor1_member = $_POST['platnomor1_member'];
$mobil2_member = $_POST['mobil2_member'];
$platnomor2_member = $_POST['platnomor2_member'];
date_default_timezone_set('Asia/Jakarta');
$today =date("Y-m-d");
// menginput data ke database
mysqli_query($conn,"INSERT INTO `member` (`username`, `password`, `nama_member`, `nohp_member`, `jenis_member`, `mobil1_member`, `platnomor1_member`, `mobil2_member`, `platnomor2_member`, `tanggalpembuatan_member`, `status_member`) 
                                VALUES ('$username', '$password', '$nama_member', '$nohp_member', '$jenis_member', '$mobil1_member', '$platnomor1_member', '$mobil2_member', '$platnomor2_member', '$today', 'Aktif')");
 
// mengalihkan halaman kembali ke member_admin.php
echo "<script>alert('Data Member Berhasil Ditambahkan');window.location='member_admin.php'</script>";
 
?>