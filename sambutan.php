<?php
// Create database connection using config file
include_once("config.php");

// query desc profile

$sql = mysqli_query($koneksi, "SELECT * FROM kepalasekolah WHERE id = 1");

$data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Squadfree Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
          </div>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="index.html #berita">Berita</a></li>
            <li><a class="nav-link scrollto" href="#services">Guru dan Karyawan</a></li>
            <li><a class="nav-link scrollto" href="index.html #portfolio">Galeri</a></li>
            <li><a class="nav-link scrollto" href="#team">Denah</a></li>
            <li><a class="nav-link scrollto" href="index.html #contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Sambutan</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Sambutan</a></li>
            <li>Sambutan Kepala Sekolah</li>
          </ol>
        </div>
        </div>
        

      </div>
    </section>
    <!-- end section  -->

      <section id="sambutan" class="sambutan">
        <div class="container">
            <div class="row">
              <div class="col">
                <img src="./assets/img/Gambar/Kepsek/kepsek.png" alt="">
                <h1><b>Purwito, S.Pd</b></h1>
                <p>Kepala Sekolah SMA N 1 Bukateja</p>
              </div>
              <div class="col-lg-8 content">
                <h1><b>Sambutan Kepala Sekolah</b></h1>
                <p><?=$data['sambutan']?></p>
              </div>
            </div>
      </section>
    </section>
        <!-- Footer -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul style="text-align: center;">
              <li><i class="bx bx-chevron-right" style="text-align:center;"></i> <a href="#">YouTube Channel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">YouTube Channel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">YouTube Channel</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Kategori</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Guru dan Karyawan</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tags</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
            </ul>

            <div class="social-links">
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-youtube"></i></a>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2017 - 2022 SMN 1 Bukateja</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="#">Kelompok Online DPW</a>
      </div>
    </div>
  </footer><!-- End Footer -->