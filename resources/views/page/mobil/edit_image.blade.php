{{-- Hilmi --}}
@include('layouts.navbar.navbar')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb') }}/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Edit Car Data</h1>
            </div>
        </div>
    </div>
</section>

    <div class="container py-5">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Data Mobil</h4>

                                <form class="forms-sample" action="/page/mobil/mobil/
                                    {{ $mobil->id }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-group">
                                        <label for="foto_mobil">Image</label>
                                        <input class="form-control" type="file" name="foto_mobil"
                                            value="{{ $mobil->foto_mobil }}">
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <a href="{{ url('/mobil') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        @include('layouts.footer.footer')
