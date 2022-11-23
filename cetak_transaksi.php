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
	<?php
	// koneksi database
	include_once 'db_connection.php';
	$id_transaksi = $_GET['id_transaksi'];
	$sql ="SELECT * FROM transaksi WHERE id_transaksi= '$id_transaksi'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	?>
	<div class="kotak_tambah_member">
	<p class="tulisan_login">Struk Pembayaran Montana Car Wash</p>
				    <td>Tanggal         : <?php echo $row['tanggal_transaksi']?> </td>
			    </tr>
                <br>
                <tr>
				    <td>ID Transaksi    : <?php echo $row['id_transaksi']?> </td>
			    </tr>
                <br><br>
                <tr>
				    <td>Nama &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: <?php echo $row['namapelanggan_transaksi']?> </td>
			    </tr><br>
                <tr>
				    <td>Mobil &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $row['mobil_transaksi']?> </td>
			    </tr><br>
                <tr>
				    <td>Plat Nomor &ensp;&ensp;&ensp;&ensp;&ensp;: <?php echo $row['platnomor_transaksi']?> </td>
			    </tr><br>
                <tr>
				    <td>Jenis Pencucian &ensp;: <?php echo $row['jeniscuci_transaksi']?> </td>
			    </tr><br><br>
                <tr>
				    <td>    Pembayaran &ensp;: <?php echo $row['jenispembayaran_transaksi']?> </td>
			    </tr><br>
                <tr>
				    <td>    HARGA &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: <?php echo $row['harga']?> </td>
			    </tr><br>
            <br>
            <p class="tulisan_login">Terimakasih Atas Kunjungan Anda.</p>
	</div>
    <div class="text-center">
			<a class="btn btn-danger" href="transaksi_admin.php">Kembali</a>
			</div>
    </body>
</html>