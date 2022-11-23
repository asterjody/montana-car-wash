<?php
  session_start();
  include 'db_connection.php';
  $username = $_SESSION['username'];
  $cari_id = "SELECT * FROM member WHERE username='$username'";
  $result = mysqli_query($conn, $cari_id);
?>
<?php
  if(mysqli_num_rows($result)>0){
    $data = mysqli_fetch_array($result);
    $_SESSION["nohp_member"] = $data["nohp_member"];
    $_SESSION["nama_member"] = $data["nama_member"];
    $_SESSION["jenis_member"] = $data["jenis_member"];
    $_SESSION["tanggalpembuatan_member"] = $data["tanggalpembuatan_member"];
    $_SESSION["status_member"] = $data["status_member"];
    $_SESSION["mobil1_member"] = $data["mobil1_member"];
    $_SESSION["platnomor1_member"] = $data["platnomor1_member"];
    $_SESSION["mobil2_member"] = $data["mobil2_member"];
    $_SESSION["platnomor2_member"] = $data["platnomor2_member"];
  }
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
	<p class="tulisan_login">Reservasi Montana Car Wash</p>
	<form method="post" action="tambah_reservasi_aksi.php">
		<table width="400px">
            <tr>
				<td>Nama Pelanggan</td>
				<td><input type="text" class="form_data" value="<?php echo $data['nama_member'] ?>" name="namapelanggan_antrian"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" class="form_data" value="<?php echo $data['nohp_member'] ?>" name="nohp_antrian"></td>
			</tr>
            <tr>
				<td>Nama Mobil</td>
				<td><select type="text" class="form_data" name="mobil_antrian">
				<option value="<?php echo $data['mobil1_member'] ?>"><?php echo $data['mobil1_member'] ?></option>
			    <option value="<?php echo $data['mobil2_member'] ?>"><?php echo $data['mobil2_member'] ?></option>
				</td>
			</tr>
			<tr>
				<td>Plat Nomor</td>
				<td><select type="text" class="form_data" name="platnomor_antrian">
				<option value="<?php echo $data['platnomor1_member'] ?>"><?php echo $data['platnomor1_member'] ?></option>
			    <option value="<?php echo $data['platnomor2_member'] ?>"><?php echo $data['platnomor2_member'] ?></option>
				</td>
			</tr>
			<tr>
				<td>Jenis Cuci</td>
				<td><input type="text" class="form_data" value="<?php echo $data['jenis_member'] ?>" name="jeniscuci_antrian">
				</td>
			</tr>
			<tr>
				<td><input type="hidden" class="form_data" value="<?php echo $data['jenis_member'] ?>" name="member_antrian">
				</td>
			<tr>
				<td><br></td>
			</tr>	
		</table>
		<div class="text-center">
		<input type="submit" class="btn btn-success" value="Reservasi">
		<br><br>
		<a class="btn btn-danger" href="halaman_member.php">Kembali</a>
		</div>
	</form>
	</div>
</body>
</html>