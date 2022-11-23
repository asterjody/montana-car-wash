<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'db_connection.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM member WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$check = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($check > 0){
 
	$data = mysqli_fetch_assoc($login);
	if($data['status_member']=="Aktif"){
	// cek jika user login sebagai Admin
	if($data['jenis_member']=="Admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenis_member'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:transaksi_admin.php");
 
	// cek jika user login sebagai Member Normal
	}else if($data['jenis_member']=="Normal"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenis_member'] = "Normal";
		// alihkan ke halaman dashboard Member Normal
		header("location:halaman_member.php");
 
	// cek jika user login sebagai Member Hidrolik
	}else if($data['jenis_member']=="Hidrolik"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenis_member'] = "Hidrolik";
		// alihkan ke halaman dashboard Member Normal
		header("location:halaman_member.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}
if($data['status_member']=="Tidak Aktif"){
	header("location:login.php?pesan=tidakaktif");
}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>