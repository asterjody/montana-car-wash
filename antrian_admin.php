<!DOCTYPE html>
<html lang="en">

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
  <link href="assets/css/gaya1.css" rel="stylesheet">
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="transaksi_admin.php"><img src="assets/img/logomontana.png" alt="Responsive image" class="img-fluid"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="transaksi_admin.php">Transaksi</a></li>
          <li><a href="antrian_admin.php">Antrian</a></li>
          <li><a href="member_admin.php">Member</a></li>
          <li><a href="kritiksaran_admin.php">Kritik dan Saran</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
	 <!-- ======= Antrian Section ======= -->
    <div id="antrian" class="pricing-area area-padding">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Informasi Antrian</h2>
            </div>
          </div>
        </div>
		<br>
		  <table border="2" class="table table-bordered table-striped table-hover">
        <thead>
        <tr class="text-center">
                <td style="width: 50px;">No</td>
                <td>Nama Pelanggan</td>
                <td>No. HP</td>
                <td>Mobil</td>
                <td>Plat Nomor</td>
                <td>Jenis Cuci</td>
                <td>Jenis Member</td>           
				<td>Status</td>
                <td>Ubah Status</td>
                <td>Aksi</td>   				
            </tr>
        </thead>
        <?php
        include "db_connection.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM `antrian`');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['namapelanggan_antrian'] ?></td>
                <td><?php echo $data['nohp_antrian'] ?></td>
                <td><?php echo $data['mobil_antrian'] ?></td>
                <td><?php echo $data['platnomor_antrian'] ?></td>
                <td><?php echo $data['jeniscuci_antrian'] ?></td>
                <td><?php echo $data['member_antrian'] ?></td>
				        <td><?php echo $data['status_antrian'] ?></td>
                <td><a type="button" class="btn btn-warning" href="berjalan_status.php?id_antrian=<?php echo $data['id_antrian']; ?> " class="edit"> BERJALAN </a>
                    <a type="button" class="btn btn-success" href="selesai_status.php?id_antrian=<?php echo $data['id_antrian']; ?> " class="edit"> SELESAI </a>
                </td>
                <td><a type="button" class="btn btn-success" href="selesai_antrian.php?id_antrian=<?php echo $data['id_antrian']; ?> " class="edit"> TRANSAKSI </a>
                <a type="button" class="btn btn-danger" href="hapus_antrian.php?id_antrian=<?php echo $data['id_antrian']; ?> " class="trash" onclick="javascript: return confirm('Anda yakin akan hapus data?')"> HAPUS </a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <div class="text-center"><a type="button" class="btn btn-success" href="tambah_antrian.php">Tambah Antrian</a>
    <br><br>
   
    <!-- End Antrian Section -->
  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Montana </span>Car Wash</h2>
                </div>

                <p>Jl. Raden Saleh No.35, RT.001/RW.005, Karang Tengah, Kec. Ciledug,<br> Kota Tangerang, Banten 15157</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <h4>informasi</h4>
               
                <div class="footer-contacts">
                  <p><span>Telefon:</span> (021) 7314391</p>
                  <p><span>Email:</span> montanacarwash@gmail.com</p>
                  <p><span>Buka:</span> 07.00-20.00</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>