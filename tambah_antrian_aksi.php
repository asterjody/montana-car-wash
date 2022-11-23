<?php 
// koneksi database
include 'db_connection.php';
 
// menangkap data yang di kirim dari form
$namapelanggan_antrian = $_POST['namapelanggan_antrian'];
$nohp_antrian = $_POST['nohp_antrian'];
$mobil_antrian = $_POST['mobil_antrian'];
$platnomor_antrian = $_POST['platnomor_antrian'];
$jeniscuci_antrian = $_POST['jeniscuci_antrian'];
$member_antrian = $_POST['member_antrian'];
// menginput data ke database
mysqli_query($conn,"INSERT INTO `antrian` (`namapelanggan_antrian`, `nohp_antrian`, `mobil_antrian`, `platnomor_antrian`, `jeniscuci_antrian`, `member_antrian`, `status_antrian`) 
                                    VALUES ('$namapelanggan_antrian', '$nohp_antrian', '$mobil_antrian', '$platnomor_antrian', '$jeniscuci_antrian', '$member_antrian', 'Menunggu')");
 
// mengalihkan halaman kembali ke antrian_admin.php
echo "<script>alert('Antrian Berhasil Ditambahkan');window.location='antrian_admin.php'</script>";
 
?>