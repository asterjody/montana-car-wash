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
	$id_member = $_GET['id_member'];
	$sql ="SELECT * FROM member WHERE id_member= '$id_member'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	?>
	<div class="kotak_tambah_member">
	<p class="tulisan_login">Ubah Data Member Montana Car Wash</p>
        <form method="post" action="edit_member_aksi.php">
            <table width="400px">
				<tr>
				    <td><input type="hidden" value="<?php echo $row['id_member']?>" name="id_member"></td>
			    </tr>
            	<tr>
				    <td>Nama</td>
				    <td><input type="text" value="<?php echo $row['nama_member']?>" name="nama_member"></td>
			    </tr>
                <tr>
				    <td>No. HP</td>
				    <td><input type="text" value="<?php echo $row['nohp_member']?>" name="nohp_member"></td>
			    </tr>
                <tr>
				    <td>Jenis Member</td>
				    <td><select type="text" value="<?php echo $row['jenis_member']?>" name="jenis_member">
                    <option value="Hidrolik">Hidrolik</option>
				    <option value="Normal">Normal</option></td>
			    </tr>
			    <tr>
				    <td>Mobil 1</td>
				    <td><input type="text" value="<?php echo $row['mobil1_member']?>" name="mobil1_member"></td>
			    </tr>
			    <tr>
				    <td>Plat Nomor 1</td>
				    <td><input type="text" value="<?php echo $row['platnomor1_member']?>" name="platnomor1_member"></td>
			    </tr>
                <tr>
				    <td>Mobil 2</td>
				    <td><input type="text" value="<?php echo $row['mobil2_member']?>" name="mobil2_member"></td>
			    </tr>
			    <tr>
				    <td>Plat Nomor 2</td>
				    <td><input type="text" value="<?php echo $row['platnomor2_member']?>" name="platnomor2_member"></td>
			    </tr>
                <tr>
				    <td>Status Member</td>
				    <td><select type="text" value="<?php echo $row['status_member']?>" name="status_member">
				    <option value="Aktif">Aktif</option>
				    <option value="Tidak Aktif">Tidak Aktif</option>
				    </td>
			    </tr>
                <tr>
					<td><br></td>
				</tr>
				 
            </table>
			<div class="text-center">
			<input type="submit" class="btn btn-success" value="Ubah">
			<br><br>
			<a class="btn btn-danger" href="member_admin.php">Kembali</a>
			</div>
        </form>
	</div>
    </body>
</html>