<?php
include "backend/connections.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MEGABAJA PGB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">megabaja_pgb@gmail.com</a></i>
        <i class="bi bi-telephone  d-flex align-items-center ms-4"></i><span> &nbsp; (021) 48703535 </span></i>
      </div>

      <!-- ======= Navbar ======= -->
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://api.whatsapp.com/send?phone=6281210188914" class="twitter"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/megabaja.pgb" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/mega_baja_pulogebang/?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">MEGABAJA PULOGEBANG<span>.</span></a></h1>

      <!-- .navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">About</a></li>
          <li><a class="nav-link scrollto" href="#about">Portofolio</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>MegaBaja</span></h1>
      <h2>TOKO BAJA DAN BESI BETON</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ABOUT</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Mega Baja Pulogebang adalah distributor Besi dan Baja yang menyediakan berbagai macam kebutuhan kontruksi bangunan anda dari jenis, berat dan ukuran</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Tampilan</li>
              <li data-filter=".filter-card">Gudang</li>
              <li data-filter=".filter-web">Marketing</li>
              <li data-filter=".filter-office">Office</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Tampilan</p>
              <a href="assets/img/portfolio/portfolio-1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tampilan"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Tampilan1</p>
              <a href="assets/img/portfolio/portfolio-2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tampilan1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Tampilan2</p>
              <a href="assets/img/portfolio/portfolio-3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tampilan2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Gudang</p>
              <a href="assets/img/portfolio/portfolio-4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gudang"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-5.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Gudang1</p>
              <a href="assets/img/portfolio/portfolio-5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gudang1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-6.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Gudang2</p>
              <a href="assets/img/portfolio/portfolio-6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gudang2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-7.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Marketing1</p>
              <a href="assets/img/portfolio/portfolio-7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Marketing1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-8.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Marketing</p>
              <a href="assets/img/portfolio/portfolio-8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Marketing"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Marketing2</p>
              <a href="assets/img/portfolio/portfolio-9.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Marketing2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-10.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Marketing3</p>
              <a href="assets/img/portfolio/portfolio-10.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Marketing3"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-office">
            <img src="assets/img/portfolio/portfolio-11.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Office</p>
              <a href="assets/img/portfolio/portfolio-11.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Office"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-office">
            <img src="assets/img/portfolio/portfolio-12.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Office1</p>
              <a href="assets/img/portfolio/portfolio-12.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Office1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-office">
            <img src="assets/img/portfolio/portfolio-13.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Office2</p>
              <a href="assets/img/portfolio/portfolio-13.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Office2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ULASAN PELANGGAN</h2>
          <h3>Berikan <span>Rating</span> dan <span> Ulasan </span> Anda </h3>
          <p>Kepada Pelanggan Yang Terhormat Rating dan Ulasan Anda Sangat Berarti Sekali Bagi Perusahaan Kami Untuk Menjadi Lebih Baik </p>
        </div>

        <form action="backend/process.php" method="post" role="form" class="php-email-form">

          <div class="rating">
            <input type="radio" name="star" id="star1" value="1"><label for="star1"></label>
            <input type="radio" name="star" id="star2" value="2"><label for="star2"></label>
            <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
            <input type="radio" name="star" id="star4" value="4"><label for="star4"></label>
            <input type="radio" name="star" id="star5" value="5"><label for="star5"></label>
          </div>


          <div class="col-lg-6">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Anda"><br>
              </div>

            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Berikan Ulasan" required></textarea><br>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" name="success">Kirim</button></div>
        </form>
      </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Melayani eceran pengiriman ke setiap wilayah dan kabupaten. ongkir gratis harga terbaik Langsung hubungi kami untuk informasi lebih jelasnya.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-inboxes"></i></div>
              <h4><a href="">Pelayanan Barang</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-earmark-person"></i></div>
              <h4><a href=""> Pelayanan Langsung</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-layers"></i></div>
              <h4><a href="">Digital Marketing</a></h4>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Untuk mengetahui lebih lanjut jangan lupa hubungi nomer dibawah MegaBaja PuloGebang</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jl. Raya Pulo Gebang No.128 , Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13950 </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>megabaja_pgb@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>(021) 48703535</p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63463.107874816465!2d106.92012417910156!3d-6.204982600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b79a2679df1%3A0x47a2b3b43fa7f2e4!2sMega%20Baja%20Pulogebang%20-%20Distributor%20Besi%20%7C%20Toko%20Besi%20%7C%20Baja%20Ringan%20%7C%20Genteng%20Metal!5e0!3m2!1sid!2sid!4v1650426474119!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MegaBaja<span>.</span></h3>
            <p>
              Jl. Raya Pulo Gebang No.128 , <br>
              Kec. Cakung, Kota Jakarta Timur, <br>
              Daerah Khusus Ibukota Jakarta 13950<br><br>
              <strong>Phone :</strong> (021) 48703535<br>
              <strong>Email &nbsp;&nbsp;:</strong> megabaja_pgb@gmail.com <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Pelayanan Barang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Pelayanan Langsung</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Digital Marketing</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Untuk mengetahui lebih lanjut jangan lupa follow sosial media MegaBaja PuloGebang</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/i/flow/login" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/megabaja.pgb" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/mega_baja_pulogebang?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=6281210188914" class="twitter"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>MegaBaja</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://instagram.com/smkn71jakarta?igshid=YmMyMTA2M2Y=">SMKN 71 Jakarta</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>