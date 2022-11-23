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
    <p class="tulisan_login">Riwayat Transaksi Member</p>
<table border="2" class="table table-bordered table-striped table-hover">
        <thead>
        <tr class="text-center">
                <td style="width: 50px;">No</td>
                <td>Tanggal</td>
                <td>Mobil</td>
                <td>Plat Nomor</td>				
            </tr>
        </thead>
        <?php
	    // koneksi database
    	include_once 'db_connection.php';
        $no = 1;
        $sql ="SELECT * FROM transaksi WHERE idmember_transaksi= '" . $_GET["id_member"] . "'";
	    $query = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['tanggal_transaksi'] ?></td>
                <td><?php echo $data['mobil_transaksi'] ?></td>
                <td><?php echo $data['platnomor_transaksi'] ?></td>
            </tr>
        <?php } ?>
        </table>
        <div class="text-center">
			<a class="btn btn-danger" href="member_admin.php">Kembali</a>
			</div>
    </div>
    </body>
</html>