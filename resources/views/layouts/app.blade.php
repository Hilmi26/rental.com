<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
<<<<<<< HEAD
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('sb') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('sb') }}/img/favicon.png">
=======
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('sb') }}/images/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('sb') }}/images/favicon.png">
>>>>>>> 627362a3bdae5b00d7bc978b2fb0549cd7c691d2
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <title>
    Rental Mobil
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('sb') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('sb') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('sb') }}/demo/demo.css" rel="stylesheet" />
</head>

<body class="{{ $class ?? '' }}">
  <div class="wrapper">
    @auth
      @include('page.konten.auth')
    @endauth
    @guest
      @include('page.konten.guest')
    @endguest
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('sb') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('sb') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('sb') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('sb') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('sb') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('sb') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('sb') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('sb') }}/demo/demo.js"></script>
  @stack('js')
</body>

</html>
