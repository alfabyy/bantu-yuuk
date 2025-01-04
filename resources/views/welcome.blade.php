

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BantuYuuk!</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
          <h1 class="sitename">BantuYuuk!</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="auth-buttons d-flex align-items-center">
          <a class="btn-getstarted" href="{{ route('register') }}">Daftar Akun</a>
        </div>

      </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">

              <h1 class="mb-4">
                Layanan Bantuan  <br>
                Terpercaya untuk  <br>
                <span class="accent-text">Kebutuhan Anda</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Kami menyediakan layanan pendampingan profesional, perawatan harian, dan konsultasi kesehatan untuk memastikan lansia Anda mendapatkan perhatian terbaik.
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">
            </div>
          </div>
        </div>
    
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title">Layanan Bantuan untuk anda dengan Pendampingan Profesional</h2>
            <p class="about-description">Kami menyediakan layanan pendampingan terpercaya bagi anda untuk memastikan kenyamanan, kemandirian, dan kebahagiaan mereka dalam menjalani aktivitas sehari-hari. Dengan tim yang berpengalaman lebih dari 15 tahun, kami hadir untuk Anda.</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Pendampingan aktivitas harian</li>
                  <li><i class="bi bi-check-circle-fill"></i> Konsultasi kesehatan rutin</li>
                  <li><i class="bi bi-check-circle-fill"></i> Dukungan sosial dan emosional</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Bantuan administrasi dan kebutuhan lansia</li>
                  <li><i class="bi bi-check-circle-fill"></i> Layanan fleksibel sesuai kebutuhan</li>
                  <li><i class="bi bi-check-circle-fill"></i> Profesional, aman, dan terpercaya</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="assets/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>15+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Kami menghadirkan layanan yang mudah diakses, fleksibel, dan ramah keluarga.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <h4>Easy to Use</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <h4>Responsive</h4>
              </a><!-- End tab nav item -->

            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <h4>Engagement</h4>
              </a>
            </li><!-- End tab nav item -->

          </ul>

        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>User Friendly</h3>
                <p class="fst-italic">
                  Sistem yang dirancang memiliki antarmuka yang ramah pengguna dan mudah digunakan.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Antarmuka yang sederhana dan mudah dipahami oleh pengguna, termasuk pengguna baru.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Navigasi yang jelas dan terstruktur untuk mempercepat akses ke fitur penting.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Dukungan pada berbagai perangkat, termasuk desktop, tablet, dan ponsel, dengan desain yang responsif.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-illustration-1.webp" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Responsive Website</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-illustration-2.webp" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Customer Engagement</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
              <i class="bi bi-award"></i>
              <h4>Helpful</h4>
              <p>Kami siap membantu keluarga Anda dengan layanan profesional yang mencakup perawatan, dukungan aktivitas harian, dan pendampingan bagi lansia.</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-box blue">
              <i class="bi bi-patch-check"></i>
              <h4>Trusted</h4>
              <p>Layanan kami didukung oleh tim pendamping berpengalaman, terpercaya, dan berkomitmen memberikan yang terbaik untuk kenyamanan pengguna.</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-box green">
              <i class="bi bi-currency-dollar"></i>
              <h4>Affordable</h4>
              <p>Harga yang transparan dan terjangkau, sesuai dengan kebutuhan pengguna dan layanan berkualitas tinggi.</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-box red">
              <i class="bi bi-shield-check"></i>
              <h4>Secure</h4>
              <p>Keamanan data dan kenyamanan pengguna adalah prioritas kami. Semua layanan dijalankan sesuai standar keamanan terbaik.</p>
            </div>
          </div><!-- End Feature Borx-->

        </div>

      </div>

    </section><!-- /Features Cards Section -->

    <!-- Features 2 Section -->
    <section id="features-2" class="features-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-4">

            <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
              <div class="d-flex align-items-center justify-content-end gap-4">
                <div class="feature-content">
                  <h3>Use On Any Device</h3>
                  <p>Aplikasi Bantuu Yuuk dirancang untuk dapat diakses dari perangkat apa pun dengan mudah dan nyaman, memastikan fleksibilitas pengguna kapan saja dan di mana saja.</p>
                </div>
                <div class="feature-icon flex-shrink-0">
                  <i class="bi bi-display"></i>
                </div>
              </div>
            </div><!-- End .feature-item -->

            <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
              <div class="d-flex align-items-center justify-content-end gap-4">
                <div class="feature-content">
                  <h3>Retina Ready</h3>
                  <p>Aenean tellus metus bibendum sed posuere ac mattis non nunc vestibulum fringilla purus sit amet fermentum aenean commodo.</p>
                </div>
                <div class="feature-icon flex-shrink-0">
                  <i class="bi bi-eye"></i>
                </div>
              </div>
            </div><!-- End .feature-item -->

          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="phone-mockup text-center">
              <img src="assets/img/phone-app-screen.webp" alt="Phone Mockup" class="img-fluid">
            </div>
          </div><!-- End Phone Mockup -->

          <div class="col-lg-4">

            <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
              <div class="d-flex align-items-center gap-4">
                <div class="feature-icon flex-shrink-0">
                  <i class="bi bi-code-square"></i>
                </div>
                <div class="feature-content">
                  <h3>W3c Valid Code</h3>
                  <p>Dikembangkan menggunakan standar kode terbaik, aplikasi kami memberikan performa yang andal dan stabil di berbagai platform.</p>
                </div>
              </div>
            </div><!-- End .feature-item -->

            <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
              <div class="d-flex align-items-center gap-4">
                <div class="feature-icon flex-shrink-0">
                  <i class="bi bi-browser-chrome"></i>
                </div>
                <div class="feature-content">
                  <h3>Browser Compatibility</h3>
                  <p>Berjalan lancar di berbagai browser modern, memberikan pengalaman pengguna yang mulus tanpa batas.</p>
                </div>
              </div>
            </div><!-- End .feature-item -->

          </div>
        </div>

      </div>

    </section>

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Temukan solusi terbaik untuk mendukung kebutuhan Anda dan keluarga.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-activity"></i>
              </div>
              <div>
                <h3>Kesehatan Lansia</h3>
                <p>Kami menyediakan layanan bantuan kesehatan khusus lansia yang mencakup pemeriksaan rutin dan pendampingan medis.</p>
                <a href="" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-diagram-3"></i>
              </div>
              <div>
                <h3>Pendamping Harian</h3>
                <p>Layanan pendampingan sehari-hari untuk membantu lansia dengan aktivitas rumah tangga dan kebutuhan lainnya.</p>
                <a href="" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-easel"></i>
              </div>
              <div>
                <h3>Transportasi Aman</h3>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                <a href="" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-clipboard-data"></i>
              </div>
              <div>
                <h3>Layanan Terpersonal</h3>
                <p>Kami juga menawarkan layanan khusus sesuai dengan kebutuhan spesifik yang diinginkan oleh keluarga Anda.</p>
                <a href="" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <button class="btn btn-primary"><a class="cta-btn text-white" href="{{ route('login') }}">See More</a></button>
          </div>
          
          <!-- End Service Card -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Faq Section -->
    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Have a question? Check out the FAQ</h2>
            <p class="faq-description">Kami siap membantu Anda memahami cara menggunakan Bantu Yuuk. Temukan jawaban atas pertanyaan umum tentang layanan kami di bagian FAQ di bawah ini.</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Apakah aplikasi ini menyediakan bantuan harian untuk lansia?</h3>
                <div class="faq-content">
                  <p>Ya, kami menyediakan berbagai layanan seperti belanja kebutuhan, memasak, dan bantuan rumah tangga.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Bagaimana cara memesan layanan melalui Bantu Yuuk?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Bagaimana cara bergabung sebagai penyedia jasa di platform ini?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah penyedia layanan sudah melalui proses verifikasi?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Bagaimana cara melakukan pembayaran?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah ada paket khusus untuk bantuan harian atau bulanan?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>
          </div>

        </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>Hubungi kami menggunakan kontak yang ada di bawah.</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>Kampus STT Terpadu Nurul Fikri</p>
                  <p>Depok, Jawa Barat</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+62 8129 5162 156</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>alifabyansyafiq@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>
              <p>Dengan memberikan saran dari anda kami bisa berkembang.</p>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Alfaby</span>
          </a>
          <div class="footer-contact pt-3">
            <p>STT Terpadu Nurul Fikri</p>
            <p>RTM Kelapa Dua, Depok</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">KusKus</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="">KusKus</a> Distributed By <a href="">Alfaby</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
