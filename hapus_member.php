<?php
// koneksi database
include_once 'db_connection.php';

$sql="DELETE FROM member WHERE id_member='" . $_GET["id_member"] . "'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman member_admin.php
echo "<script>alert('Data yang anda Hapus Sukses');window.location='member_admin.php'</script>";
?>