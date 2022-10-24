<!doctype html>
<html lang="en">

<head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sb/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('sb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('sb/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('sb/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index.html"><strong>Rental.com</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#"
                                class=" site-menu-toggle js-menu-toggle py-5 "><span
                                    class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li><a href="index" class="nav-link">Home</a></li>
                                <li><a href="index" class="nav-link">Profil</a></li>
                                <li><a href="mobil" class="nav-link">Daftar Mobil</a></li>
                                <li><a href="testimonials" class="nav-link">Ulasan</a></li>
                                {{-- <li class="active"><a href="about" class="nav-link">About</a></li> --}}
                                <li><a href="contact" class="nav-link">Logout</a></li>
                                <li>
                                    <div>
                                        <a href="{{ url('/create_mobil') }}" type="button"
                                            class="btn btn-sm btn-primary px-3 text-white">Tambah
                                            Data</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>


        <div class="hero inner-page" style="background-image: url('sb/images/hero_1_a.jpg');">

            <div class="container">
                <div class="row align-items-end ">
                    <div class="col-lg-5">

                        <div class="intro">
                            <h1><strong>AI RENTAL</strong></h1>
                            <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span>
                                <strong>Daftar Mobil</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Daftar Mobil</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>


                <div class="row">

                    @foreach ($mobil as $item)
                        <div class="col-md-6 col-lg-4 mb-4">

                            <div class="listing d-block  align-items-stretch">
                                <div class="listing-img h-100 mr-4">

                                    @if ($item->foto_mobil != '')
                                        <img src="{{ asset('/') }}storage/{{ $item->foto_mobil }}" alt="Image"
                                            class="img-fluid">
                                    @else
                                        <img src="{{ asset('/') }}sb/images/mobil/car_default.png" alt="Image"
                                            class="img-fluid">
                                    @endif

                                </div>

                                <div class="listing-contents h-100">
                                    <h3>{{ $item->merek }}</h3>
                                    <div class="rent-price mb-2">
                                        <strong>{{ $item->harga_sewa }}</strong><span class="mx-1">/</span>day
                                    </div>
                                    {{-- <div class="d-block d-md-flex mb-3 border-bottom pb-3 justify-content-between">
                                        <div class="listing-feature pl-0 col-3">
                                            <span class="caption">Transmisi:</span>
                                            <span class="number">{{ $item->transmisi }}</span>
                                        </div>
                                        <div class="listing-feature pl-0 col-3">
                                            <span class="caption">Tipe:</span>
                                            <span class="number">{{ $item->tipe }}</span>
                                        </div>
                                        <div class="listing-feature pl-0 col-3">
                                            <span class="caption">Tahun:</span>
                                            <span class="number">{{ $item->tahun }}</span>
                                        </div>
                                    </div> --}}
                                    <div class="d-block d-md-flex mb-3 border-bottom pb-3 justify-content-around">
                                        <div class="listing-feature pr-4">
                                            <span class="caption">Transmisi:</span>
                                            <span class="number">{{ $item->transmisi }}</span>
                                        </div>
                                        <div class="listing-feature pr-4">
                                            <span class="caption">Tipe:</span>
                                            <span class="number">{{ $item->tipe }}</span>
                                        </div>
                                        <div class="listing-feature pr-4">
                                            <span class="caption">Tahun:</span>
                                            <span class="number">{{ $item->tahun }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-block d-md-flex mb-3 border-bottom pb-3">

                                            <div class="listing-feature pr-4">
                                                <span class="caption">Status Unit :</span>
                                                <span>{{ $item->status_unit }}</span>
                                            </div>
                                        </div>
                                        {{-- <p>
                                            History : {{ $item->history_penyewaan }}
                                        </p> --}}
                                        <p>
                                        <div class="d-flex-fluid">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop{{ $item->id }}">
                                                Detail
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop{{ $item->id }}"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Detail
                                                                Mobil {{ $item->merek . ' ' . $item->tipe }}</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Warna : {{ $item->warna }}</p>
                                                            <p>Unit : {{ $item->unit }}</p>
                                                            <p>Plat : {{ $item->plat }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--
                                            <a href="#" class="btn btn-secondary ">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a> --}}

                                            <a href="" type="button" class="btn btn-dark px-3"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                Edit
                                                {{-- <i class="ti-file"></i> --}}
                                            </a>
                                            <form action="/mobil/{{ $item->id }}" method="post"
                                                style="display: inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm ('Yakin akan menghapus data?')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Delete"> Delete
                                                    {{-- <i class="ti-trash"></i> --}}
                                                </button>
                                            </form>
                                        </div>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach


                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('sb/images/car_6.jpg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>Mitsubishi Pajero</h3>
                                <div class="rent-price">
                                    <strong>$389.00</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Luggage:</span>
                                        <span class="number">8</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Doors:</span>
                                        <span class="number">4</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Passenger:</span>
                                        <span class="number">4</span>
                                    </div>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                        voluptatem quibusdam.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('sb/images/car_5.jpg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>Nissan Moco</h3>
                                <div class="rent-price">
                                    <strong>$389.00</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Luggage:</span>
                                        <span class="number">8</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Doors:</span>
                                        <span class="number">4</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Passenger:</span>
                                        <span class="number">4</span>
                                    </div>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                        voluptatem quibusdam.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('sb/images/car_4.jpg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>Honda Fitta</h3>
                                <div class="rent-price">
                                    <strong>$389.00</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="row">
                                        <div class="listing-feature pr-4 col-4">
                                            <span class="caption">Luggage:</span>
                                            <br>
                                            <span class="number">8</span>
                                        </div>
                                        <div class="listing-feature pr-4 col-4">
                                            <span class="caption">Doors:</span>
                                            <br>
                                            <span class="number">4</span>
                                        </div>
                                        <div class="listing-feature pr-4 col-4">
                                            <span class="caption">Passenger:</span>
                                            <br>
                                            <span class="number">4</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                        voluptatem quibusdam.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="custom-pagination">
                            <a href="#">1</a>
                            <span>2</span>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Testimonials</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('sb/images/person_1.jpg') }}" alt="Image"
                                    class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('sb/images/person_2.jpg') }}" alt="Image"
                                    class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('sb/images/person_3.jpg') }}" alt="Image"
                                    class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                        <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati,
                            laboriosam.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="#" class="btn btn-primary btn-white">Rent a car now</a>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Support</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>.Downloaded from <a
                                    href="https://themeslab.org/" target="_blank">Themeslab</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('sb/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('sb/js/popper.min.js') }}"></script>
    <script src="{{ asset('sb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sb/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('sb/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('sb/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('sb/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('sb/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('sb/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('sb/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('sb/js/aos.js') }}"></script>

    <script src="{{ asset('sb/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
