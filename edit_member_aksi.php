<?php 
// koneksi database
include_once 'db_connection.php';
 
// menangkap data yang di kirim dari form
$id_member = $_POST['id_member'];
$nama_member = $_POST['nama_member'];
$nohp_member = $_POST['nohp_member'];
$jenis_member = $_POST['jenis_member'];
$mobil1_member = $_POST['mobil1_member'];
$platnomor1_member = $_POST['platnomor1_member'];
$mobil2_member = $_POST['mobil2_member'];
$platnomor2_member = $_POST['platnomor2_member'];
$status_member = $_POST['status_member'];
// query SQL untuk insert data ke dalam Mysql
$sql = "UPDATE member SET id_member = '$id_member', nama_member = '$nama_member', nohp_member = '$nohp_member', jenis_member = '$jenis_member', mobil1_member = '$mobil1_member', platnomor1_member = '$platnomor1_member', mobil2_member = '$mobil2_member', platnomor2_member = '$platnomor2_member', status_member = '$status_member' WHERE id_member = '$id_member'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman member_admin.php
echo "<script>alert('Data yang anda Update sukses');window.location='member_admin.php'</script>";
?>