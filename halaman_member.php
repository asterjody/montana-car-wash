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
    $_SESSION["id_member"] = $data["id_member"];
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Radio+Canada:300,400,400i,500,500i,700,800,900" rel="stylesheet">

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
        <h1><a href="index.php"><img src="assets/img/logomontana.png" alt="Responsive image" class="img-fluid"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="halaman_member.php">Member</a></li>
          <li><a href="profil_member.php">Profil</a></li>
          <li><a href="antrian_member.php">Informasi Antrian</a></li>
          <li><a href="harga_member.php">Harga</a></li>
          <li><a href="kontak_member.php">Kontak</a></li>
          <li><a href="logout.php">Logout</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/montana.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Montana Car Wash</h2>
                <p class="animate__animated animate__fadeInUp">Mengutamakan Kepuasan Pelanggan.</p>
                <a href="harga_member.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lanjutkan</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/montana1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Membership Montana Car Wash Sekarang</h2>
                <p class="animate__animated animate__fadeInUp">Jadi Member di Montana Car Wash Untuk Memperoleh Banyak Keuntungan.</p>
                <a href="harga_member.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lanjutkan</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/montana2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Montana Auto Detailing</h2>
                <p class="animate__animated animate__fadeInUp">Buat Mobil Anda Menjadi Seperti Baru Lagi di Montana Auto Detailing!</p>
                <a href="harga_member.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lanjutkan</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->


  <main id="main">

  <!-- ======= Member Section ======= -->
  <div id="member" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Halaman Member Montana Car Wash</h2><br>
              <h4><p>Selamat Datang <?php echo $_SESSION['nama_member']; ?>, Di Halaman Member Montana Car Wash</p></h4>
              <h4><p>Membership Cuci Mobil : <?php echo $_SESSION['jenis_member']; ?> </p></h4>
              <h4><p> ID Member : <?php echo $_SESSION['id_member']; ?> </p><br></h4>
              <a type="button" class="btn btn-warning" href='edit_password.php?id_member=<?php echo $_SESSION["id_member"]; ?> '> Ubah Password </a><br><br><br>
              <h2>Riwayat Transaksi Membership</h2><br>
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
        $batas   = 10;
		    $halaman = @$_GET['halaman'];
			  if(empty($halaman)){
				  $posisi  = 0;
				  $halaman = 1;
		  	}
			  else{
				  $posisi  = ($halaman-1) * $batas;
			  }

			  $no = $posisi+1;
			
        $idmember_transaksi = $_SESSION["id_member"];
        $cari = "SELECT * FROM transaksi WHERE idmember_transaksi='$idmember_transaksi' ORDER BY tanggal_transaksi ASC limit $posisi,$batas";
        $result = mysqli_query($conn, $cari);
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['tanggal_transaksi'] ?></td>
                <td><?php echo $data['mobil_transaksi'] ?></td>
                <td><?php echo $data['platnomor_transaksi'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
		<?php

		$query2     = mysqli_query($conn, "SELECT * FROM transaksi WHERE idmember_transaksi='$idmember_transaksi'");
		$jmldata    = mysqli_num_rows($query2);
		$jmlhalaman = ceil($jmldata/$batas);
		?>
		<div class="text-center">
			<ul class="pagination">
				<?php
				for($i=1; $i<=$jmlhalaman; $i++) {
					if ($i != $halaman) {
						echo "<li class='page-item'><a class='page-link' href='halaman_member.php?halaman=$i'>$i</a></li>";
					} else {
						echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
					}
				}
				?>
			</ul>
		</div>
    <div class="text-center"><a type="button" class="btn btn-success" href="reservasi_antrian.php">Reservasi</a>

            </div>
          </div>
        </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End Member Section -->

  </main>
  <!-- End #main -->

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