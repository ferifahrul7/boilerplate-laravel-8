<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="MegonoDev, Megono Development, Web Developer, Android Developer" name="keywords">
  <meta content="MegonoDev adalah tim professional pengembang aplikasi dan website" name="description">

  <!-- Favicons -->
 <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60"   href="{{ asset('icons/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72"   href="{{ asset('icons/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76"   href="{{ asset('icons/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
<!-- android -->
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icons/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32"    href="{{ asset('icons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96"    href="{{ asset('icons/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16"    href="{{ asset('icons/favicon-16x16.png') }}">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('icons/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

  <!-- Manifest -->
<link rel="manifest" href="{{ asset('manifest/manifest.json') }}">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/aos/aos.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

</head>

<body>

  @include('layouts.frontend.partials.header')
  @include('layouts.frontend.widgets.intro')
  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('layouts.frontend.partials.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('lib/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('lib/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/js/main.js') }}"></script>
  @stack('scripts')

</body>

</html>