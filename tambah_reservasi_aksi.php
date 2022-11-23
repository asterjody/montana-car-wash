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
                                    VALUES ('$namapelanggan_antrian', '$nohp_antrian', '$mobil_antrian', '$platnomor_antrian', '$jeniscuci_antrian', '$jeniscuci_antrian', 'Menunggu')");
 
// mengalihkan halaman kembali ke halaman_member.php
echo "<script>alert('Reservasi Berhasil! Silahkan Cek Informasi Antrian');window.location='halaman_member.php'</script>";
 
?>