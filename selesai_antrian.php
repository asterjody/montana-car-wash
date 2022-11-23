<?php
	// koneksi database
	include_once 'db_connection.php';
	$id_antrian = $_GET['id_antrian'];
	$sql ="SELECT * FROM antrian WHERE id_antrian= '$id_antrian'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	?> 
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Montana Car Wash</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
	<link href="assets/img/faviconmontana.png" rel="icon">
  <link href="assets/img/faviconapple.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="login1.css" rel="stylesheet">
</head>
<body>
	<div class="kotak_tambah_member">
	<p class="tulisan_login">Tambah Transaksi Montana Car Wash</p>
	<form method="post" action="tambah_transaksi_aksi.php">
		<table width="400px">
            <tr>
				<td>Nama Pelanggan</td>
				<td><input type="text" class="form_data" value="<?php echo $row['namapelanggan_antrian']?>" name="namapelanggan_transaksi" readonly></td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td><input type="text" class="form_data" value="<?php echo $row['nohp_antrian']?>" name="nohp_transaksi" readonly></td>
			</tr>
			<tr>
				<td>Mobil</td>
				<td><input type="text" class="form_data" value="<?php echo $row['mobil_antrian']?>" name="mobil_transaksi" readonly></td>
			</tr>
			<tr>
				<td>Plat Nomor</td>
				<td><input type="text" class="form_data" value="<?php echo $row['platnomor_antrian']?>" name="platnomor_transaksi" readonly></td>
			</tr>
            <tr>
				<td>Jenis Pencucian</td>
				<td><input type="text" class="form_data" value="<?php echo $row['jeniscuci_antrian']?>" name="jeniscuci_transaksi" readonly>
				</td>
			</tr>
            <tr>
				<td>Jenis Member</td>
				<td><input type="text" class="form_data" value="<?php echo $row['member_antrian']?>" name="member_transaksi" readonly>
			</td>
			</tr>
            <tr>
				<td>Jenis Pembayaran</td>
				<td><select type="text" class="form_data" name="jenispembayaran_transaksi">
				<option value="Cash">Cash</option>
				<option value="Debit">Debit</option>
				<option value="QR">QR</option>
				<option value="Gopay">Gopay</option>
				<option value="Membership">Membership</option>
			</td>
			</tr>
			<tr>
				<td>ID Member Transaksi</td>
				<td><input type="text" class="form_data" name="idmember_transaksi"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>	
		</table>
		<div class="text-center">
		<input type="submit" class="btn btn-success" value="Tambah">
		<br><br>
		<a class="btn btn-danger" href="antrian_admin.php">Kembali</a>
		</div>
	</form>
	</div>
</body>
</html>