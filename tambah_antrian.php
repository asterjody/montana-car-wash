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
	<p class="tulisan_login">Tambah Antrian Montana Car Wash</p>
	<form method="post" action="tambah_antrian_aksi.php">
		<table width="400px">
            <tr>
				<td>Nama Pelanggan</td>
				<td><input type="text" class="form_data" name="namapelanggan_antrian"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" class="form_data" name="nohp_antrian"  onkeypress="return event.charCode >= 48 && event.charCode <=57"></td>
			</tr>
            <tr>
				<td>Nama Mobil</td>
				<td><input type="text" class="form_data" name="mobil_antrian"></td>
			</tr>
			<tr>
				<td>Plat Nomor</td>
				<td><input type="text" class="form_data" name="platnomor_antrian"></td>
			</tr>
			<tr>
				<td>Jenis Cuci</td>
				<td><select type="text" class="form_data" name="jeniscuci_antrian">
        		<option value="Bodi">Bodi</option>
				<option value="Normal">Normal</option>
				<option value="Hidrolik">Hidrolik</option>
				</td>
			</tr>
			<tr>
				<td>Jenis Member</td>
				<td><select type="text" class="form_data" name="member_antrian">
				<option value="Tidak Member">Tidak Member</option>
				<option value="Hidrolik">Hidrolik</option>
                <option value="Normal">Normal</option>
				</td>
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