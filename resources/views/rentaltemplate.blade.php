@include('layouts/navbar')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb') }}/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Rental</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border w-100 rounded mb-4 d-flex" style="padding: 150px;">
                            <p>Foto Profil<img src="foto.jpg" alt="" class="rounded" style="width: 500px"></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="w-100 rounded mb-2 mt-1 d-flex">
                            <form action="#" class="bg-light p-5 rounded contact-form">
                                <div class="form-group">
                                    <label for="">Current Password</label>
                                    <input type="text" class="form-control" placeholder="Your Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="text" class="form-control" placeholder="Your New Password">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="text" class="form-control" placeholder="Your Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Change Password" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Telepon:</span> <a href="tel://1234567920">+6283 1235 2355 9877</a></p>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span>
                                <label for="" placeholder="{{ Auth::user()->email }}"></label>
                                <a href="mailto:info@yoursite.com">Jimmy@gmail.com</a>
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-8 block-9 mb-md-5">
                {{-- form biodata --}}
                <form action="#" class="bg-light p-5 rounded contact-form">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

                {{-- form ganti password --}}
                <form action="#" class="bg-light p-5 rounded contact-form">
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" placeholder="Your Telepon">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" placeholder="Your Alamat">
                    </div>
                    <div class="d-flex mb-0 d-block justify-content-center flex-fill row">
                        <div class="form-group col-4">
                            <label for="">Kota</label>
                            <input type="text" class="form-control" placeholder="Your Kota">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" placeholder="Your Provinsi">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Kode Pos</label>
                            <input type="text" class="form-control" placeholder="Your Kode Pos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Wajah KTP</label>
                        <img src="" alt="" class="">
                        <input type="text" class="form-control" placeholder="Your Wajah KTP">
                    </div>
                    <div class="form-group">
                        <label for="">KTP</label>
                        <input type="text" class="form-control" placeholder="Your KTP">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-primary py-3 px-5">
                    </div>
                </form>


            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Tabel Reservasi</h1>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Mobil</th>
                            <th>Jam Ambil</th>
                            <th>Jam Kembali</th>
                            <th>Tanggal Ambil</th>
                            <th>Tanggal Kembali</th>
                            <th>Total Harga</th>
                            <th>Total Denda</th>
                            <th>Status Pembayaran</th>
                            <th>Status Pemesanan</th>
                            <th>Status Pengembalian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        {{-- @foreach ($kategori as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <th>{{ $item->nama_kategori }}</th>
                            <th>
                                <button type="button" class="btn btn-md btn-dark" style="width: 80px"
                                    data-bs-toggle="modal" data-bs-target="#formUpdate{{ $item->id }}">
                                    Edit
                                </button>
                                <form action="/kategori/{{ $item->id }}" method="post"
                                    style="display: inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-md btn-danger" style="width: 80px"
                                        onclick="return confirm ('Yakin akan menghapus data?')">
                                        Delete
                                    </button></form>
                            </th>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="formUpdate{{ $item->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="formUpdate"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="formUpdate">Edit Kategori</h5>
                                        <button type="button" class="rounded"
                                            style="width: 34px; border: 1px solid" data-bs-dismiss="modal"
                                            aria-label="Close">X</button>
                                    </div>
                                    <form action="/kategori/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">

                                            <div class="col">
                                                <label>Kategori</label>
                                                <input type="text" name="nama_kategori"
                                                    class="form-control " value="{{ $item->nama_kategori }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary me-2">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="d-flex mb-0 d-block">
            <a href="/create_mobil" type="button" class="btn btn-primary rounded mt-3 mb-3">Tambah Mobil</a>
        </div>
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
                                {{-- <a href="/page/transaksi/transaksi/{{ $item->id }}" class="btn btn-primary py-2">Pinjam</a> --}}
                                <a href="/page/mobil/detail_mobil/{{ $item->id }}" type="button"class="btn btn-secondary py-2 ml-2 ">Details</a>

                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

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


@include('layouts/footer')
