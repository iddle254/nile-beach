<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @yield('title')
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/libs.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.3.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  @yield('top-bar')

  <!-- ======= Header ======= -->
  @yield('nav-bar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @yield('hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @yield('about')

    <!-- ======= Why Us Section ======= -->
    @yield('why-us')
    <!-- End Why Us Section -->

    <!-- End About Section -->    

    <!-- ======= Menu Section ======= -->
    @yield('menu')
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    @yield('specials')
    <!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    @yield('events')
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    @yield('book-table')
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    @yield('testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    @yield('gallery')
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    @yield('chefs')
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    @yield('contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @yield('footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.min.js')}}"></script>  

  <!-- Template Main JS File -->
  <script src="{{asset('js/libs.js')}}"></script>

</body>

</html>