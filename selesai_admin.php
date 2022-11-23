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
	<p class="tulisan_login">Transaksi Berhasil Ditambahkan</p>
		<div class="text-center">
        <a type="button" class="btn btn-danger" href="hapus_antrian.php?id_antrian=<?php echo $data['id_antrian']; ?> " class="trash" onclick="javascript: return confirm('Anda yakin akan hapus data?')"> OK </a>
		</div>
	</div>
</body>
</html>