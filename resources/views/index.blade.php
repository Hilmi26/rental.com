<!doctype html>
<html lang="en">

  <head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sb/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('sb/bootstrap/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('sb/css/bootstrap.min.css')}}"> --}}
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
    
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link
       href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
       rel="stylesheet"
     />
{{--  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
     <!-- Bootstrap Icons -->
     <link
       rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
     />

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
      <div class="container-fluid mt-5">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>
