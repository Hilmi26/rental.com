<!doctype html>
<html lang="en">

  <head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sb/fonts/icomoon/style.css')}}">
    

    <link rel="stylesheet" href="{{ asset('sb/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('sb/css/style.css')}}">
    {{-- table --}}
    <link href="{{ asset ('sb/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  </head>

  <body>


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


    {{-- include navbar s --}}
      @include('../layouts/navbar')
      {{-- include navbar e --}}

      {{-- include tampilan s --}}
      <div class="container-fluid p-5 mt-5 ">
        {{-- @include('tampil') --}}
        {{-- @include('flashmessage') --}}
        @yield('main')
    </div>
        {{-- include tampilan e --}}


      {{-- include footer s --}}
      @include('../layouts/footer')
      {{-- include footer e --}}

    </div>

    <script src="{{ asset('sb/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('sb/js/popper.min.js')}}"></script>
    <script src="{{ asset('sb/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('sb/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('sb/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('sb/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('sb/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('sb/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('sb/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('sb/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('sb/js/aos.js')}}"></script>

    <script src="{{ asset('sb/js/main.js')}}"></script>
    {{-- tabel --}}
    <script src="{{ asset('sb/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('sb/js/demo/datatables-demo.js') }}"></script>

  </body>

</html>
