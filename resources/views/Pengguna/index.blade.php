<!DOCTYPE html>
<html lang="en">

<link rel="icon" href="{{ url('assets/img/logo.png') }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Buku Tamu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        @include('sweetalert::alert')
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#cta">Feedback</a></li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>SDN 1 Sumbersewu <br> Kec Muncar</h1>
          <h2>Melangkah bersama menciptakan masa depan unggul</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/bukutamu" class="btn-get-started scrollto">Form Tamu</a>
            <!-- <a href="https://www.youtube.com/watch?v=iTYmojXCpIw" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span></span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{  asset('template/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <strong>VISI</strong>
            <p style="text-align: justify">
            Unggul dalam prestasi akademik dan non akademik berdasar IMTAQ dan IPTEK serta berwawasan nasional dan global.
            </p>
            <a href="https://sdn1sumbersewu.sch.id/" class="btn-learn-more">Web Sekolah SDN 1 Sumbersewu</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <strong>MISI</strong>
            <p style="text-align:justify">
            1.Melaksanakan PAKEM ( Pembelajaran Aktif, Kreatif, Efektif, dan Menyenangkan )
            2.Membina siswa dalam bidang non akademik sesuai dengan minat dan bakat yang dimilki
            3.Memberdayakan lingkungan sebagai sumber belajar untuk pengembangan life skill
            4.Membimbing siswa untuk memiliki dasar – dasar akhlak mulia dan budi pekerti luhur
            5.Membina siswa berperilaku hidup sehat dan peduli lingkungan serta menerapkan sekolah yang kondusif
            6.Mengembangkan wawasan nusantara untuk cinta tanah air
            7.Mengantar siswa siap menghadapi pengaruh global
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('template/assets/img/skills.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Ringkasan Data Pengunjung</h3>
            <p>
              Berikut ini merupakan ringkasan jumlah pengguna buku tamu SDN 1 Sumbersewu berdasarkan kriteria pekerjaan:
            </p>

            <div class="row">

              <!-- Data Pengunjung -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                          Total Pengunjung</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$customer}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data ASN -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                          ASN</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$asn}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Pelajar/Mahasiswa-->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Pelajar
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight text-gray-800"><strong>{{$student}}</strong> orang
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-address-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Guru/Dosen -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-dark text-uppercase mb-1">
                          Guru/Dosen</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$lecturer}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-address-book fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Peneliti -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                          Peneliti</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$researcher}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-american-sign-language-interpreting fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- General -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-secondary text-uppercase mb-1">
                          Umum</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$general_job}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="justify-content: center">
      <div class="container" data-aos="fade-up" style="justify-content: center">
        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Bagi konsumen data yang datang langsung ke Sekolah SDN 1 Sumbersewu dapat dilayani di Ruang Guru dan Operator,
          </p>
        </div>

        <div class="row" style="justify-content: center">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi</h4>
                <p>Jln.PB Sudirman No. 98 Desa Sumbersewu Kec. Muncar, Kab Banyuwangi, Jawa Timur 68472</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sdnsatusubersewu@ymail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+62  822-3276-0161</p>
              </div>

              <div class="calendar">
                <i class="bi bi-calendar"></i>
                <h4>Jadwal Buka:</h4>
                <p>
                  Senin-Sabtu, 07.00-12.00 WIB<br>Jumat, 07.00-10.30 WIB
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/assets/js/main.js') }}"></script>

</body>

</html>
