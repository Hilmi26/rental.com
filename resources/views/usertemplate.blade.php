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
                <h1 class="mb-3 bread">User</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4">
                <div class="row mb-5">
                    <div class="col-md-12 justify-content-center">
                        <div class="border w-100 rounded mb-4" style="padding: 15px;">
                            <p>Your Profil </p>
                        
                            <img src="{{ asset('storage/'. $data->foto_profil )}}" alt="" class="rounded mx-auto" style="width: 200px">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="w-100 rounded mb-2 mt-1 d-flex">
                            <form action="{{ url ('updatepassword/'.$data->user->id)}}" class="bg-light p-5 rounded contact-form" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="">Current Password</label>
                                    <input type="text" class="form-control" placeholder="Your Current Password" value="{{$data->user->password}}">
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" class="form-control" placeholder="Your New Password" name="password" >
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Your Confirm Password" name="password_confir" >
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
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
                <form action = "{{ url ('page/user/'.$data->id)}}" method = "POST" class="bg-light p-5 rounded contact-form">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label >Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{$data->user->nama_user}}">
                        </div>
                        <div class="form-group">
                            <label >User Name</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->user->username}}">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->user->email}}">
                        </div >
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                        </div>
                </form>

                {{-- form ganti password --}}
                <form action = "{{ url ('page/detailuser/'.$data->id)}}" method = "POST" enctype="multipart/form-data" class="bg-light p-5 rounded contact-form">
                    @csrf
                    @method('put') 
                    <div class="form-group">
                        <input type="hidden" class="form-control @error('user_id') is-invalid @enderror " name="user_id"  value="{{$data->id}}">

                        <label >No HP</label>
                        <input type="text" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user"  value="{{$data->telp_user}}">
                    </div>
                    <div class="form-group">
                        <label >Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{$data->alamat}}">
                    </div>
                    <div class="d-flex mb-0 d-block justify-content-center flex-fill row">
                        <div class="form-group col-4">
                            <label>Provinsi</label>
                            <input type="hidden" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{$data->provinsi}}" id="provinsi2">
                            <select class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" onchange="daerah(value)" >
                                <option>{{$data->provinsi}}</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label >Kota</label>
                            <select class="form-control @error('provinsi') is-invalid @enderror" name="kota" id="kota" onchange="daerah(value)">
                                <option>{{$data->kota}}</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label >Kode Pos</label>
                            <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Wajah KTP</label>
                        <br>
                        <img src="{{ asset('storage/'. $data->wajah_ktp)}}" height="100" alt="" class="mt-2 mb-2">
                        <input type="file" class="form-control-file mt-1" name="selfi"  value="{{$data->wajah_ktp}}">
                    </div>
                    <div class="form-group">
                        <label for="">KTP</label>
                        <br>
                        <img src="{{ asset('storage/'. $data->ktp )}}" height="100" alt="" class="mt-2 mb-2">

                        <input type="file" class="form-control-file" name="ktp"  value="{{$data->ktp}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
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
                            <th>Rental</th>
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


@include('layouts/footer')
