<?php
// koneksi database
include_once 'db_connection.php';
 
$sql="DELETE FROM antrian WHERE id_antrian='" . $_GET["id_antrian"] . "'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman antrian_admin.php
echo "<script>alert('Data yang anda Hapus Sukses');window.location='antrian_admin.php'</script>";
?>