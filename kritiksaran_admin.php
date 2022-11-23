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
    <!-- ======= Kritik Saran Section ======= -->
    <br><br>
    <div id="kritiksaran" class="pricing-area area-padding">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Kritik & Saran</h2>
            </div>
          </div>
        </div>
		<br>
		  <table border="2" class="table table-bordered table-striped table-hover">
        <thead>
        <tr class="text-center">
                <td style="width: 50px;">No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Subjek</td>           
			        	<td>Pesan</td>   				
            </tr>
        </thead>
        <?php
        include "db_connection.php";
        $batas   = 20;
		    $halaman = @$_GET['halaman'];
			  if(empty($halaman)){
				  $posisi  = 0;
				  $halaman = 1;
		  	}
			  else{
				  $posisi  = ($halaman-1) * $batas;
			  }

			  $no = $posisi+1;
			
			  $query_mysql = mysqli_query($conn,"SELECT * FROM `kritiksaran` limit $posisi,$batas")or die(mysql_error());

			  while($data = mysqli_fetch_array($query_mysql)){
				?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['subject'] ?></td>
				        <td><?php echo $data['message'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
		<?php

		$query2     = mysqli_query($conn, "SELECT * FROM `kritiksaran`");
		$jmldata    = mysqli_num_rows($query2);
		$jmlhalaman = ceil($jmldata/$batas);
		?>
		<div class="text-center">
			<ul class="pagination">
				<?php
				for($i=1; $i<=$jmlhalaman; $i++) {
					if ($i != $halaman) {
						echo "<li class='page-item'><a class='page-link' href='kritiksaran_admin.php?halaman=$i'>$i</a></li>";
					} else {
						echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
					}
				}
				?>
			</ul>
		</div>
    <br><br>
    
    <!-- End Kritik Saran Section -->

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