<?php 
// koneksi database
include 'db_connection.php';
 
// menangkap data yang di kirim dari form
date_default_timezone_set('Asia/Jakarta');
$today =date("Y-m-d H:i:s");
$nohp_transaksi = $_POST['nohp_transaksi'];
$namapelanggan_transaksi = $_POST['namapelanggan_transaksi']; 
$mobil_transaksi = $_POST['mobil_transaksi'];
$platnomor_transaksi = $_POST['platnomor_transaksi'];
$jeniscuci_transaksi = $_POST['jeniscuci_transaksi'];
$member_transaksi = $_POST['member_transaksi'];
$harga = $_POST['harga'];
$jenispembayaran_transaksi = $_POST['jenispembayaran_transaksi'];
$idmember_transaksi = $_POST['idmember_transaksi'];
// menginput data ke database
mysqli_query($conn,"INSERT INTO `transaksi` (`tanggal_transaksi`, `nohp_transaksi`, `namapelanggan_transaksi`, `mobil_transaksi`, `platnomor_transaksi`, `jeniscuci_transaksi`, `member_transaksi`, `harga`, `jenispembayaran_transaksi`, `idmember_transaksi`, `statuspembayaran_transaksi`) VALUES ('$today', '$nohp_transaksi', '$namapelanggan_transaksi', '$mobil_transaksi', '$platnomor_transaksi', '$jeniscuci_transaksi', '$member_transaksi', '$harga', '$jenispembayaran_transaksi', '$idmember_transaksi', 'Berhasil')");
// mengalihkan halaman kembali ke transaksi_admin.php
header("location:selesai_admin.php");
 
?>