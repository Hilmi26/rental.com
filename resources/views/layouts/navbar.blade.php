<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sb/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/magnific-popup.css">
    {{-- <link rel="stylesheet" href="{{ asset('/sb') }}/css/aos.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('/sb') }}/css/ionicons.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/flaticon.css">
    {{-- <link rel="stylesheet" href="{{ asset('/sb') }}/css/icomoon.css"> --}}
    <link rel="stylesheet" href="{{ asset('/sb') }}/css/style.css">


    {{-- tabel --}}
    <link href="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8eb9c4688.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
        <div class="container">
            <div class="word-waves">
                <a class="navbar-brand" href="/index">"Car Rental"</a>
                <a class="navbar-brand" href="/index">"Car Rental"</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            {{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
                <div class="container ">
                    <div class="word-waves">
                        <a class="navbar-brand" href="/index">"Car Rental"</a>
                        <a class="navbar-brand" href="/index">"Car Rental"</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button> --}}

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="/index" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
                            <li class="nav-item"><a href="/car" class="nav-link">Cars</a></li>
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
                                    <a id="navbarDropdown" class="nav-link" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                            href="{{ url('page/detailuser/' . Auth::user()->id . '/edit') }}">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="{{ url('deletdetaileuser/' . Auth::user()->id) }}">
                                            Hapus akun
                                        </a>
                                        {{-- <a href="{{ url ('deletdetailuser/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                                            Hapus
                                          </a> --}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
