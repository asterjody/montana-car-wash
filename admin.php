<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Montana Car Wash</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="transaksi_admin.php"><span>Montana </span>Car Wash</a></h1>
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

  <main id="main">	
    <!-- ======= Services Section ======= -->
    <div id="transaksi" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Transaksi</h2>
            </div>
          </div>
        </div>
		
		  <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Tanggal</td>
                <td>Nama</td>
                <td>Mobil</td>      
                <td>Plat Nomor</td>
                <td>Jenis Pencucian</td>
                <td>Membership</td>
                <td>Harga</td>
                <td>Jenis Pembayaran</td>
                <td>Status Pembayaran</td>           		
            </tr>
        </thead>
        <?php
        include "db_connection.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM `transaksi`');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id_transaksi'] ?></td>
                <td><?php echo $data['tanggal_transaksi'] ?></td>
                <td><?php echo $data['namapelanggan_transaksi'] ?></td>
                <td><?php echo $data['mobil_transaksi'] ?></td>
                <td><?php echo $data['platnomor_transaksi'] ?></td>
                <td><?php echo $data['jeniscuci_transaksi'] ?></td>
                <td><?php echo $data['member_transaksi'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td><?php echo $data['jenispembayaran_transaksi'] ?></td>
				        <td><?php echo $data['statuspembayaran_transaksi'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <div class="text-center"><a type="button" class="btn btn-info" href="tambah_transaksi.php">Tambah Transaksi</a>
    <br><br>
	
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
		
		  <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Pelanggan</td>
                <td>No. HP</td>
                <td>Mobil</td>
                <td>Plat Nomor</td>
                <td>Jenis Cuci</td>           
				<td>Status</td>   				
            </tr>
        </thead>
        <?php
        include "db_connection.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM `antrian`');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['namapelanggan_antrian'] ?></td>
                <td><?php echo $data['nohp_antrian'] ?></td>
                <td><?php echo $data['mobil_antrian'] ?></td>
                <td><?php echo $data['platnomor_antrian'] ?></td>
                <td><?php echo $data['jeniscuci_antrian'] ?></td>
				        <td><?php echo $data['status_antrian'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <div class="text-center"><a type="button" class="btn btn-info" href="tambah_antrian.php">Tambah Antrian</a>
    <br><br>
   
    <!-- End Antrian Section -->

	
	 <!-- ======= Member Section ======= -->
    <div id="member" class="contact-area">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Data Member</h2>
            </div>
          </div>
        </div>
		
		  <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Nomor HP</td>       
                <td>Jenis Member</td>
                <td>Jumlah Pencucian</td>
                <td>Tanggal Mulai</td>
                <td>Tanggal Selesai</td>
                <td>Status Membership</td>
                <td>Mobil 1</td>
                <td>Plat Nomor 1</td>
                <td>Mobil 2</td>
                <td>Plat Nomor 2</td>         				
            </tr>
        </thead>
        <?php
        include "db_connection.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM `member`');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_member'] ?></td>
                <td><?php echo $data['email_member'] ?></td>
                <td><?php echo $data['nohp_member'] ?></td>
				        <td><?php echo $data['jenis_member'] ?></td>
                <td><?php echo $data['jumlahcuci_member'] ?></td>
                <td><?php echo $data['tanggalmulai_member'] ?></td>
                <td><?php echo $data['tanggalselesai_member'] ?></td>
				        <td><?php echo $data['status_member'] ?></td>
                <td><?php echo $data['mobil1_member'] ?></td>
                <td><?php echo $data['platnomor1_member'] ?></td>
                <td><?php echo $data['mobil2_member'] ?></td>
                <td><?php echo $data['platnomor2_member'] ?></td>
                <td> 
                <a href='?hapus=$data[id_member]' onClick=\"return confirm('Yakin akan menghapus data?');\"> 
                <input type='button' value='Hapus'>
                </a>
                <?php
                if(isset($_GET['hapus'])){ 
    
                 mysqli_query($conn,"delete from member where id_member='$_GET[hapus]'")
                  or die (mysqli_error($conn));

                echo "<p><b> Data berhasil dihapus</b> </p>";
                echo "<meta http-equiv=refresh content=2;URL='admin.php'>";
                }
                ?>
            </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <div class="text-center"><a type="button" class="btn btn-info" href="tambah_member.php">Tambah Member</a>
    <br><br>
   
    <!-- End Member Section -->

    <!-- ======= Kritik Saran Section ======= -->
    <div id="kritiksaran" class="pricing-area area-padding">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Kritik & Saran</h2>
            </div>
          </div>
        </div>
		
		  <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Subjek</td>           
			        	<td>Pesan</td>   				
            </tr>
        </thead>
        <?php
        include "db_connection.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM `kritiksaran`');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['subject'] ?></td>
				        <td><?php echo $data['message'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br><br>
    
    <!-- End Kritik Saran Section -->

  </main><!-- End #main -->

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
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
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
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
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