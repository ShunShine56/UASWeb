<?php
// Create database connection using config file
include_once("config.php");

// query desc profile

if (!$result_gambar = $koneksi->query("SELECT * FROM galeri ORDER BY Id DESC")) {
}
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
          <h2>Gambar</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Gambar</a></li>
            <li>Gambar Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Gambar</h2>
          <p>Kumpulan gambar kegiatan di SMAN 1 Bukateja</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

        <?php
          // fetch data
          while ($data_gambar = mysqli_fetch_array($result_gambar)) {
            ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="foto/<?=$data_gambar['Gambar']?>">
              <div class="portfolio-links">
                <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Guru bernyanyi bersama"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/Gambar/2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/Gambar/2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Peringatan hari guru"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/Gambar/3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/Gambar/3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto guru laki-laki menggunakan adat jawa"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/Gambar/4.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/Gambar/4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Karanval Kabupaten"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/Gambar/5.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/Gambar/5.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Perayaan hari jadi sekolah yang ke 30"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/Gambar/6.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/Gambar/6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto guru perpempuan menggunakan adat jawa"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/Gambar/1.png" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="assets/img/Gambar/1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Guru bernyanyi bersama"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/Gambar/2.png" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="assets/img/Gambar/2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Peringatan hari guru"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/Gambar/3.png" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="assets/img/Gambar/3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto guru laki-laki menggunakan adat jawa"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-wrap">
                    <img src="assets/img/Gambar/4.png" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="assets/img/Gambar/4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Karanval Kabupaten"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-wrap">
                    <img src="assets/img/Gambar/5.png" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="assets/img/Gambar/5.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Perayaan hari jadi sekolah yang ke 30"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="assets/img/Gambar/6.png" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="assets/img/Gambar/6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto guru perpempuan menggunakan adat jawa"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div> -->
      </section>
    

  </main><!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>