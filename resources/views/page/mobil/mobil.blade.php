{{-- Hilmi --}}
@include('layouts.navbar')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb') }}/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Choose Your Car</h1>
            </div>
        </div>
    </div>
</section>


<section>
<div class="container">
    <div class="d-flex mb-0 d-block justify-content-end">
        <a href="/create_mobil" type="button" class="btn btn-primary rounded mt-3 mb-3">Tambah Mobil</a>
    </div>
</div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            @foreach ($mobil as $item)
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">

                        {{-- <a href="/page/mobil/edit_image/{{ $item->id }}" type="button" class="edit-list" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Image">

                            <i class="fa-solid fa-square-pen"></i>
                        </a> --}}

                        <div class="dropdown">
                            <i class="fa-solid fa-ellipsis edit-list " id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/page/mobil/edit_image/{{ $item->id }}"
                                    type="button" class="edit-list" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Edit Image">Edit Image</a>
                                <a class="dropdown-item" href="/page/mobil/edit_mobil/{{ $item->id }}"
                                    type="button" class="btn btn-edit py-2 ml-2" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Edit Detail">Edit Details</a>
                                <form action="/mobil/{{ $item->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="dropdown-item"
                                        onclick="return confirm ('Yakin akan menghapus data?')" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Delete"> Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                        @if ($item->status_unit != 'Ready')
                            <div class="car-status-unavailable ms-auto text-center" style="font-size: 12px">
                                <span class=" text-light mx-auto my-auto" >{{ $item->status_unit }}</span>
                            </div>
                        @else
                            <div class="car-status-ready ms-auto text-center" style="font-size: 12px">
                                <span class=" text-light mx-auto my-auto">{{ $item->status_unit }}</span>
                            </div>
                        @endif

                        @if ($item->foto_mobil != '')
                            <img src="{{ asset('/') }}storage/{{ $item->foto_mobil }}" alt="Image"
                                class="img rounded">
                        @else
                            <img src="{{ asset('/') }}sb/images/mobil/car_default.png" alt="Image"
                                class="img rounded">
                        @endif

                        <div class="text">
                            <h2 class="mb-2"><a href="car-single.html"
                                    style="text-decoration:none">{{ $item->merek }}</a></h2>
                            <div class="d-flex mb-3">
                                <div class="icon d-flex align-items-center justify-content-center mr-2"><span
                                        class="flaticon-pistons"></span></div>
                                <span class="text-gray">{{ $item->transmisi }}</span>
                                <p class="price ml-auto">Rp.{{ $item->harga_sewa }} <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block justify-content-end">
                                <a href="/page/transaksi/transaksi/{{ $item->id }}" class="btn btn-primary py-2">Pinjam</a>
                                <a href="/page/mobil/detail_mobil/{{ $item->id }}" type="button"class="btn btn-secondary py-2 ml-2 ">Details</a>

                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

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
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                            <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                        </p>
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
                                now</a>
                            <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url({{ asset('/sb') }}/images/car-4.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                now</a>
                            <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url({{ asset('/sb') }}/images/car-5.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-6.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-7.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-8.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-9.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-10.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-11.jpg);">
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
                        style="background-image: url({{ asset('/sb') }}/images/car-12.jpg);">
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
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
