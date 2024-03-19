<?php 
    include_once("functions/koneksi.php");
    include_once("functions/helper.php");
    
    session_start();

    // if(!isset($_SESSION['username'])) {
    //     header("location: ".BASE_URL."dashboard/auth/login.php");
    // }

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : false;
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HADIY AQIQAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= BASE_URL. "assets/vendor/aos/aos.css"; ?>" rel="stylesheet">
  <link href="<?= BASE_URL. "assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
  <link href="<?= BASE_URL. "assets/vendor/bootstrap-icons/bootstrap-icons.css"; ?>" rel="stylesheet">
  <link href="<?= BASE_URL. "assets/vendor/boxicons/css/boxicons.min.css"; ?>" rel="stylesheet">
  <link href="<?= BASE_URL. "assets/vendor/glightbox/css/glightbox.min.css"; ?>" rel="stylesheet">
  <link href="<?= BASE_URL. "assets/vendor/remixicon/remixicon.css"; ?>" rel="stylesheet">
  <link href="<?= BASE_URL. "assets/vendor/swiper/swiper-bundle.min.css"; ?>" rel="stylesheet">

  <link href="<?= BASE_URL. "assets/css/style.css"; ?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?= BASE_URL. "index.php"; ?>"><img src="assets/img/logo.png" alt="logo" style="width: 50px;"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="<?= BASE_URL. "dashboard/index.php"; ?>">Dashboard</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>LAYANAN PRAKTIS</h1>
          <h2>Dipotongin - Dimasakin - Diantarin</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <p>Aqiqah Membawa Berkah </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <h4>
              Risalah Aqiqah
            </h4>
            <p>
              Hukum Aqiqah adalah Sunnah yang sangat dianjurkan (Sunnah Muakkad) dan ini adalah pendapat mayoritas Sahabat, Tabi'in dan para Fuqoha
            </p>
            <p>
              <b>
                Sabda Rasulullah shalallahu 'alaihi wasallam untuk anak laki-laki dua ekor kambing dan untuk anak perempuan satu ekor kambing (HR. Abu Dawud)
              </b>
            </p>

            <br>
            
            <h4>
              Waktu Pelaksanaan Aqiqah
            </h4>
            <ul>
              <li><i class="ri-check-double-line"></i> 
                Hari Ketujuh sejak dilahirkan adalah hari utama pelaksanaan demikian ulama bersepakat, sebagaimana hadits Rasulullah SAW sbb: <br> 
                <b>
                  "Tiap-tiap anak tergadai (tergantung) dengan aqiqahnya, yang disembelih untuknya pada hari ke 7, di hari itu ia dicukur rambutnya dan diberi nama." (HR. Abu Dawud)
                </b>
              </li>
              <li><i class="ri-check-double-line"></i> 
                Mazhab <b>Imam Syafi'i</b> berpendapat menyembelih hewan aqiqah pada hari ketujuh adalah waktu ikhtiyar (waktu yang sebaiknya dipilih ). Namun selain hari itu tidak ada halangan dan boleh dilakukan kapan saja.
              </li>
            </ul>

            <br>
            
            <h4>
              Aqiqah adalah Tebusan
            </h4>
            <ul>
              <li><i class="ri-check-double-line"></i> 
                Aqiqah adalah sebagai tebusan dari tergadainya seorang anak. Aqiqah juga akan melepaskan si Anak yang tertahan oleh syaitan yang melekat sejak ia keluar dari Rahim ibunya ke alam dunia. Dan sebagai pencegah dari upaya syaitan yang menghalangi dari kebaikan-kebaikan akhiratnya.
              </li>
              <li><i class="ri-check-double-line"></i> 
                Imam Ahmad ra, menerangkan maksud tergadai (tertahan) adalah bahwa sang Anak kelak tidak diizinkan untuk mensyafa'ati orang tuanya dan diperkuat oleh Atha' bin Rab'ah bahwa maksud tergadai adalah tidak bisa menerima syafa'at dari anak saat diakhirat kelak (Ma'aalimus Sunan, IV/264-385)
              </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h4>
              Keutamaan Memasak Daging Aqiqah
            </h4>
            <p>Sebelum dibagikan sebaiknya daging Aqiqah dimasak terlebih dahulu, sebagaimana pendapat para Ulama sebagai berikut:</p>
            <ul>
              <li><i class="ri-check-double-line"></i> 
                "Apabila dimasak maka fakir miskin dan para tetangga langsung dapat menikmatinya tanpa harus mengeluarkan biaya, sehingga bertambah keberkahan dan kebaikannya. <b>(Ibnu Qoyyim)</b>
              </li>
              <li><i class="ri-check-double-line"></i> 
                "Tidak ada larangan bagi yang Aqiqah untuk menikmati hidangan aqiqahnya." <b>(Ibnu Sirrin)</b>
              </li>
            </ul>
            
            <br>

            <h4>
              Bolehkan Mengaqiqahkan Diri Sendiri
            </h4>
            <p>Dibolehkan melakukan aqiqah disaat si anak telah dewasa dan melakukan aqiqah atas dirinya sendiri apabila belum diaqiqahkan oleh orangtuannya, sebagaimana pendapat ulama sebagai berikut:</p>
            <ul>
              <li><i class="ri-check-double-line"></i> 
                "Baik bagi seseorang yang mengaqiqahi dirinya sendiri setelah dewasa, jika semasa kecil belum diaqiqahi 
                <b>(Imam Ahmad)</b>
              </li>
              <li><i class="ri-check-double-line"></i> 
                Jika engkau belum diaqiqahi, maka aqiqahilah dirimu sendiri meski telah dewasa  <b>(Hasan Al Basri)</b>
              </li>
            </ul>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Do'a Untuk Anak Saat Aqiqah</h2>
        </div>
        
        <h4 class="text-center">
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            "Barokallahu laka fii mauhuub wa syakartal waa hiba, wa balagho asysyuddahu wa ruziqta birra hu".
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </h4>
        <br>
        <p class="text-center">
          Semoga Allah Ta'ala memberkahímu pada pemberian (yakni anak) ini. semoga engkau bersyukur pada yang memberikannya (Allah) semoga ia sampai kepada kedewasaan dan semoga engkau diberi rizqi berupa berbaktinya si anak <br>
          (Al Adzkar hal 246)
        </p>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Harga</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>PAKET ANAK PEREMPUAN</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" rowspan="2" class="align-middle">Paket</th>
                    <th scope="col" colspan="2">Harga & Jenis Kambing</th>
                  </tr>
                  <tr>
                    <th scope="col">Betina</th>
                    <th scope="col">Jantan</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">60 Porsi</th>
                    <td>Rp. 2.380.000</td>
                    <td>Rp. 3.130.000</td>
                  </tr>
                  <tr>
                    <th scope="row">70 Porsi</th>
                    <td>Rp. 2.710.000</td>
                    <td>Rp. 3.510.000</td>
                  </tr>
                  <tr>
                    <th scope="row">80 Porsi</th>
                    <td>Rp. 3.040.000</td>
                    <td>Rp. 3.890.000</td>
                  </tr>
                  <tr>
                    <th scope="row">90 Porsi</th>
                    <td>Rp. 3.370.000</td>
                    <td>Rp. 4.270.000</td>
                  </tr>
                  <tr>
                    <th scope="row">100 Porsi</th>
                    <td>Rp. 3.700.000</td>
                    <td>Rp. 4.900.000</td>
                  </tr>
                  <tr>
                    <th scope="row">120 Porsi</th>
                    <td>Rp. 4.200.000</td>
                    <td>Rp. 5.200.000</td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>PAKET ANAK LAKI-LAKI</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" rowspan="2" class="align-middle">Paket</th>
                    <th scope="col" colspan="2">Harga & Jenis Kambing</th>
                  </tr>
                  <tr>
                    <th scope="col">Betina</th>
                    <th scope="col">Jantan</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">60 Porsi</th>
                    <td>Rp. 4.000.000</td>
                    <td>Rp. 4.500.000</td>
                  </tr>
                  <tr>
                    <th scope="row">70 Porsi</th>
                    <td>Rp. 4.300.000</td>
                    <td>Rp. 4.800.000</td>
                  </tr>
                  <tr>
                    <th scope="row">80 Porsi</th>
                    <td>Rp. 4.500.000</td>
                    <td>Rp. 5.000.000</td>
                  </tr>
                  <tr>
                    <th scope="row">90 Porsi</th>
                    <td>Rp. 4.800.000</td>
                    <td>Rp. 5.500.000</td>
                  </tr>
                  <tr>
                    <th scope="row">100 Porsi</th>
                    <td>Rp. 5.000.000</td>
                    <td>Rp. 6.000.000</td>
                  </tr>
                  <tr>
                    <th scope="row">120 Porsi</th>
                    <td>Rp. 5.500.000</td>
                    <td>Rp. 6.500.000</td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

        </div>

        <br><br>

        <div class="section-title">
          <h2>Hasil Masakan</h2>
          <p>2 Menu Olahan Kambing + Nasi Box</p>
        </div>

        <br><br>
        <div class="row">

          <div class="col-lg-6 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>JANTAN</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Paket</th>
                    <th scope="col">2 Menu Olahan Kambing</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">A : 2.350.000</th>
                    <td>60 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">B : 2.600.000</th>
                    <td>70 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">C : 2.850.000</th>
                    <td>80 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">D : 3.100.000</th>
                    <td>90 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">E : 3.600.000</th>
                    <td>120 porsi</td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>BETINA</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Paket</th>
                    <th scope="col">2 Menu Olahan Kambing</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">A : 1.600.000</th>
                    <td>60 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">B : 1.800.000</th>
                    <td>70 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">C : 2.000.000</th>
                    <td>80 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">D : 2.200.000</th>
                    <td>90 porsi</td>
                  </tr>
                  <tr>
                    <th scope="row">E : 2.400.000</th>
                    <td>120 porsi</td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

        </div>

        <br><br>
        <div class="row">

          <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box featured">
              <h3>TAMBAHAN MENU</h3>
              <ul>
                <li>Mie/Bihun Goreng: Rp 3.000/box</li>
                <li>Telur Rebus/Balado: Rp 5.000</li>
                <li>Sambal ati kentang: Rp 4.000/box</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Silahkan order disini</p>
        </div>

        <div class="row mt-5">
  <div class="col-lg-12">
    <div class="info">
      <div class="row">
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
          <div class="phone">
            <i class="bi bi-whatsapp"></i>
            <h4>Whatsapp:</h4>
            <p>0821 3643 7336</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
          <div class="email">
            <i class="bi bi-instagram"></i>
            <h4>Instagram:</h4>
            <p>@hadiyaqiqah</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="<?= BASE_URL. "index.php"; ?>"><img src="assets/img/logo.png" alt="logo" style="width: 240px;"></a>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Harga</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Produk Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Anak Perempuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Anak Laki-Laki</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Jantan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Betina</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Order disini</h4>
            <div class="row">
              <div class="col-sm-12 d-flex">
                <i class="bi bi-whatsapp"></i>
                <p class="ms-2">0821 3643 7336</p>
              </div>
              <div class="col-sm-12 d-flex">
                <i class="bi bi-instagram"></i>
                <p class="ms-2">@hadiyaqiqah</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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