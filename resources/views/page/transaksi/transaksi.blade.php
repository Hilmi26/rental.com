@include('layouts.navbar')
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb') }}/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Car Tansactions <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Car Tansactions</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-detail">
                    {{-- <div class="img rounded" style="background-image: url({{ asset('/sb') }}/images/bg_1.jpg);" > --}}
                    <img src="{{ asset('/') }}storage/{{ $mobil->foto_mobil }}" alt="Image" class="img rounded">
                    {{-- </div> --}}
                    <div class="text text-center">
                        {{-- <span class="subheading"></span> --}}
                        <h2>{{ $mobil->merek }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-dashboard"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Mileage
                                    <span>40,000</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-pistons"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Transmission
                                    <span>Manual</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-car-seat"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Seats
                                    <span>5 Adults</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-backpack"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Luggage
                                    <span>4 Bags</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-diesel"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Fuel
                                    <span>Petrol</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="justify-content-center mb-3">
                <form action="/transaksi" method="post">
                    @csrf
                    <div class="col">
                        {{-- <label>User ID</label> --}}
                        <input type="text" name="user_id" class="form-control " placeholder="Masukkan id user"
                            value="1" hidden>
                    </div>
                    <div class="col mt-3">
                        {{-- <label>Mobil ID</label> --}}
                        <input type="text" name="mobil_id" class="form-control " placeholder="Masukkan Rental "
                            value="{{ $mobil->id }}" hidden>
                    </div>
                    <div class="col mt-3">
                        {{-- <label>Rental Name</label> --}}
                        <input type="text" name="nama_rental" class="form-control " placeholder="Masukkan Rental "
                            value="{{ $mobil->rental->nama_rental }}" hidden>
                    </div>

                <div class="form-group flex-fill row">
                    <div class="col-6">
                        <label>Pick Up Date</label>
                        <input type="date" name="tgl_ambil" class="form-control " placeholder="dd/mm/yy" required>
                    </div>
                    <div class="col-6">
                        <label>Pick Up Time</label>
                        <input type="time" name="jam_ambil" class="form-control " placeholder="hh/mm" required>
                    </div>
                </div>

                <div class="form-group flex-fill row">
                    <div class="col-6">
                        <label>Drop Off Date</label>
                        <input type="date" name="tgl_kembali" class="form-control " placeholder="dd/mm/yy" required>
                    </div>
                    <div class="col-6">
                        <label>Drop Off Time</label>
                        <input type="time" name="jam_kembali" class="form-control " placeholder="hh/mm" required>
                    </div>
                </div>

                <div class="form-group flex-fill row">

                    <div class="col">
                        <label>Total Price</label>
                        <input type="text" name="total_harga" class="form-control" value="{{ $mobil->harga_sewa }}">
                    </div>
                </div>

                <div class="form-group flex-fill row">

                    <div class="col">
                        {{-- <label>Total Price</label> --}}
                        <input type="text" name="total_denda" class="form-control" value="0" hidden>
                    </div>
                </div>

                <div class="form-group flex-fill row">

                    <div class="col">
                        {{-- <label>Total Price</label> --}}
                        <input type="text" name="status_pembayaran" class="form-control" value="sudah dibayar" hidden>
                    </div>
                </div>

                <div class="form-group flex-fill row">

                    <div class="col">
                        {{-- <label>Total Price</label> --}}
                        <input type="text" name="status_pemesanan" class="form-control" value="acc" hidden>
                    </div>
                </div>

                <div class="form-group flex-fill row">

                    <div class="col">
                        {{-- <label>Total Price</label> --}}
                        <input type="text" name="status_pengembalian" class="form-control" value="belum dikembalikan" hidden>
                    </div>
                </div>

                <div class="mt-5 text-center">
                        {{-- <button type="button" class="btn btn-primary p-3"
                        style="width: 300px; height:50px;" data-bs-toggle="modal" data-bs-target="#pembayaran">
                            Pinjam
                        </button> --}}

                        <button type="submit" class="btn btn-primary p-3"
                        style="width: 300px; height:50px;">
                            Pinjam
                        </button>
                </div>
            </form>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="pembayaran" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="pembayaran" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pembayaran">Pembayaran</h5>
                        <button type="button" class="rounded" style="width: 34px; border: 1px solid" data-bs-dismiss="modal"
                            aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <label>User ID</label>
                            <input type="text" name="user_id" class="form-control " placeholder="Masukkan id user"
                                required>
                        </div>
                        <div class="col mt-3">
                            <label>Rental Name</label>
                            <input type="text" name="rental_id" class="form-control " placeholder="Masukkan Rental "
                                required>
                        </div>
                        <div class="col mt-3">
                            <label>Total Price/Midtrans</label>
                            <input type="text" name="total_harga" class="form-control " placeholder="Masukkan total price"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Bayar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                    href="#pills-description" role="tab" aria-controls="pills-description"
                                    aria-expanded="true">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                    href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                    aria-expanded="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                    role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                            aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                        <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                        <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Remote central
                                            locking</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                            aria-labelledby="pills-manufacturer-tab">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name of Lorem
                                Ipsum decided to leave for the far World of Grammar.</p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                                of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                continued her way.</p>
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel"
                            aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="head">23 Reviews</h3>
                                    <div class="review d-flex">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">Jacob Webb</span>
                                                <span class="text-right">14 March 2018</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                </span>
                                                <span class="text-right"><a href="#" class="reply"><i
                                                            class="icon-reply"></i></a></span>
                                            </p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last
                                                view back on the skyline of her hometown Bookmarksgrov</p>
                                        </div>
                                    </div>
                                    <div class="review d-flex">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">Jacob Webb</span>
                                                <span class="text-right">14 March 2018</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                </span>
                                                <span class="text-right"><a href="#" class="reply"><i
                                                            class="icon-reply"></i></a></span>
                                            </p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last
                                                view back on the skyline of her hometown Bookmarksgrov</p>
                                        </div>
                                    </div>
                                    <div class="review d-flex">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">Jacob Webb</span>
                                                <span class="text-right">14 March 2018</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                </span>
                                                <span class="text-right"><a href="#" class="reply"><i
                                                            class="icon-reply"></i></a></span>
                                            </p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last
                                                view back on the skyline of her hometown Bookmarksgrov</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="rating-wrap">
                                        <h3 class="head">Give a Review</h3>
                                        <div class="wrap">
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    (98%)
                                                </span>
                                                <span>20 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    (85%)
                                                </span>
                                                <span>10 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    (70%)
                                                </span>
                                                <span>5 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    (10%)
                                                </span>
                                                <span>0 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    (0%)
                                                </span>
                                                <span>0 Reviews</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Choose Car</span>
                <h2 class="mb-2">Related Cars</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url({{ asset('/sb') }}/images/car-1.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url({{ asset('/sb') }}/images/car-2.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url({{ asset('/sb') }}/images/car-3.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
