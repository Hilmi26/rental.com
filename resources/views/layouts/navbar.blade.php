<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('sb/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('sb/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('/sb')}}/css/style.css">
    

    {{-- tabel --}}
    <link href="{{ asset ('sb/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
	    <div class="container ">
            <div class="word-waves">
                <a class="navbar-brand" href="/index">"Car Rental"</a>
                <a class="navbar-brand" href="/index">"Car Rental"</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
	        </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/index" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="/car" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
              @guest
                @if (Route::has('login'))
                <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
                @if (Route::has('register'))
                <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->username }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url ('page/user/'.Auth::user()->id. '/edit')}}">
                        Edit
                    </a>
                    <a class="dropdown-item" href="{{ url ('deleteuser/'.Auth::user()->id)}}">
                        Hapus akun
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
                @endguest
	        </ul>
	      </div>
	    </div>
    </nav>

    {{-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        
        <div class="col-3">
            <div class="site-logo">
                <a href="index.html"><strong>CarRental</strong></a>
                <a href="index.html"><strong>CarRental</strong></a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listing">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @endif
    @if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->username }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url ('page/user/'.Auth::user()->id. '/edit')}}">
                Edit
            </a>
            <a class="dropdown-item" href="{{ url ('deleteuser/'.Auth::user()->id)}}">
                Hapus akun
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
    @endguest
    </ul>

    </div>
    </div>
    </nav>--}}
