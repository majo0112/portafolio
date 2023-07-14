<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MJ Pava | Web developer')</title>       
      <!-- Favicons -->
  <link rel="icon" href="/DevFolio/assets/img/fav-icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css"> 

  <!-- Vendor CSS Files -->
  <link href="/DevFolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/DevFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/DevFolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/DevFolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="/DevFolio/assets/css/style.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="{{ route('/') }}" class="logo"><img src="/DevFolio/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul class="menu">
          <li><a class="nav-link scrollto active" href="{{ route('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about') }}">About me</a></li>
          <li><a class="nav-link scrollto" href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
      @yield('content')
<!-- ======= Footer ======= -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="social-icons">
            <a href="https://github.com/majo0112" target="_blank" class="github-icon"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/maríajosépava/" target="_blank" class="linkedin-icon"><i class="fa-brands fa-linkedin"></i></a>
            <a href="mailto:mariajosepavamedina0112@gmail.com" class="email-icon"><i class="far fa-envelope"></i></a>
          </div>
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>MJ Pava 2023</strong>. All Rights Reserved</p>
            <div class="credits">
              Built with <a href="https://laravel.com/" target="_blank" >Laravel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="/DevFolio/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/DevFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/DevFolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/DevFolio/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/DevFolio/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="/DevFolio/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/app.js"></script>

</body>

</html>





