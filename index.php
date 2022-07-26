<?php
// Create database connection using config file
include_once("config.php");

// query desc profile

if (!$result_berita = $koneksi->query("SELECT * FROM berita ORDER BY id DESC")) {
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('config.php'); ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMAN 1 Bukateja</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

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
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="#services">Guru dan Karyawan</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#team">Denah</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="login.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Selamat Datang</h1>
      <h2>di SMA Negeri1 Bukateja</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-xl-3" data-aos="fade-up">
            <img src="assets/img/Gambar/Kepsek/kepsek.png" alt="">
            <h1><b>Purwito, S.Pd</b></h1>
            <p>Kepala Sekolah SMA N 1 Bukateja</p>
          </div>
          <div class="content col-xl-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Sambutan Kepala Sekolah</h3>
              <p>
                Puji syukur pada Allah SWT, atas berkat dan karuniaNya sehingga website sekolah mulai diaktifkan kembali sebagai sarana informasi dan komunikasi sekolah dengan peserta didik, guru, pemerhati sekolah, orang tua siswa dan juga masyarakat. Untuk itu saya mengucapkan..
              </p>
              <a href="sambutan.php" class="about-btn">Selengkapnya <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-6 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-6 col-lg-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Visi</h4>
                  <p>Lulusan yang berilmu, disiplin, dan berakhlak mulia</p>
                </div>
                <div class="col-md icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Misi</h4>
                  <p>memberikan layanan pembelajaran, bimbingan, pelatihan, dan kegiatan yang bermutu sesuai dengan kurikulum yang berlaku.</p>
                  <p>menyelenggarakan pembelajaran,bimbingan,pelatihan,dan kegiatan, dengan optimalisasi semua sumber daya yang dimiliki sekolah<a href="visimisi.html" style="text-decoration: none;">...</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Berita Section ======= -->
    <section id="berita" class="berita">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Berita</h2>
          <p>Kumpulan Berita SMAN 1 Bukateja.</p>
        </div>

        <div class="row">
        <?php
          // fetch data
          while ($berita_data = mysqli_fetch_array($result_berita)) {
            ?>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="images"><img class="img-full" width="100%" src="foto/<?=$berita_data['Gambar']?>"></div>
              <h4 class="title"><?=$berita_data['judul_berita']?></a></h4>
              <p><?=$berita_data['tanggal']?></p>
              <p class="description"> <?=$berita_data['deskripsi']?></p>
            </div>
          </div>
          <?php
          }
          ?>

          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="images"><img src="assets/img/Gambar/Berita/berita2.png" alt=""></div>
              <h4 class="title"><a href="">TIM OSK SMA Negeri 1 Bukateja</a></h4>
              <p>Senin 16 Januari 2013</p>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="images"><img src="assets/img/Gambar/Berita/berita3.png" alt=""></div>
              <h4 class="title"><a href="">Peringatan HARDIKNAS</a></h4>
              <p>Selasa 10 Maret 2019</p>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="images"><img src="assets/img/Gambar/Berita/berita4.png" alt=""></div>
              <h4 class="title"><a href="">PENGAJIAN AKBAR BULAN RAMADHAN 1440 H</a></h4>
              <p>Rabu 12 Juni 2019</p>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div> -->

        </div>
        <a href="berita-detailds.html" class="berita-btn" data-aos="fade-in" data-aos-delay="100">Selengkapnya <i class="bx bx-chevron-right"></i></a>
      </div>
    </section>
    <!-- End Berita Section -->

    <!-- Guru Dan Karyawan Section -->

    <!-- ======= Portofolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Gambar</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
          <?php
          $sql = "SELECT * FROM tb_gambar";
          $query = mysqli_query($koneksi, $sql);

          while ($siswa = mysqli_fetch_array($query)) { ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="./files/<?php echo $siswa['gambar']; ?>" class="img-fluid" alt="" width="300px">
                <div class="portfolio-links">
                  <a href="./files/<?php echo $siswa['gambar']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $siswa['keterangan']; ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <a href="gambar-details.php" class="portofolio-btn" data-aos="fade-in" data-aos-delay="100">Selengkapnya <i class="bx bx-chevron-right"></i></a>
    </section>


    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Jl. Purwandaru, Dusun 5, Majasari, Kec. Bukateja, Kabupaten Purbalingga, Jawa Tengah 53382</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>smabukateja@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon Kami</h3>
              <p>(0286) 476186</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3462590046915!2d109.4219688500433!3d-7.426879694615459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6553f07c436ed9%3A0x8146d5533e59b9bb!2sSMA%20Negeri%201%20Bukateja!5e0!3m2!1sid!2sid!4v1652671240397!5m2!1sid!2sid" width="600" height="450" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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