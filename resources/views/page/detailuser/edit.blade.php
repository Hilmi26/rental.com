
    @include('layouts.navbar.navbar')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb')}}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/index">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Data User<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Data User</h1>
          </div>
        </div>
      </div>
    </section>
    
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card bg-dark text-warning">
                    <div class="card-header">{{ __('Edit Data') }}</div>
                    <div class="card-body">
                        <form action = "{{ url ('page/detailuser/'.$data->id)}}" method = "POST" enctype="multipart/form-data">
                        @csrf
                        @method('put') 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Nama</label>
                                        <input type="hidden" class="form-control @error('user_id') is-invalid @enderror " name="user_id"  value="{{$data->id}}">

                                        <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="username"  value="{{$data->user->username}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label >No HP</label>
                                        <input type="text" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user"  value="{{$data->telp_user}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="hidden" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{$data->provinsi}}" id="provinsi2">
                                        <select class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" onchange="daerah(value)" >
                                            <option>{{$data->provinsi}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label >Kota</label>
                                        <select class="form-control @error('provinsi') is-invalid @enderror" name="kota" id="kota" onchange="daerah(value)">
                                            <option>{{$data->kota}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label >Alamat</label>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{$data->alamat}}">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label >Kode Pos</label>
                                        <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <img src="{{ asset('storage/'. $data->ktp )}}" height="100" alt="" class="mt-2 mx-auto">

                                    <div class="form-group mt-2">
                                        <label >Foto KTP</label>
                                        <input type="file" class="form-control-file" name="ktp"  value="{{$data->ktp}}">
                                    </div>

                                    <img src="{{ asset('storage/'. $data->wajah_ktp)}}" height="100" alt="" class="mt-2">

                                    <div class="form-group mt-2">
                                        <label >Foto Wajah & KTP</label>
                                        <input type="file" class="form-control-file mt-1" name="selfi"  value="{{$data->wajah_ktp}}">
                                    </div>

                                    <img src="{{ asset('storage/'. $data->foto_profil)}}" height="100" alt="" class="mt-2">

                                    <div class="form-group mt-2">
                                        <label >Foto Profil</label>
                                        <input type="file" class="form-control-file mt-1" name="profil"  value="{{$data->foto_profil}}">
                                    </div>
                                </div>
                            </div> 
                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                                <a href="/page/detailuser" class="btn btn-primary btn-sm mt-3">kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer.footer')
