@include('../layouts/navbar')

{{-- <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5"> --}}
  {{-- <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="/index">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Data User<i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Data User</h1>
      </div>
    </div>
  </div> --}}
{{-- </section> --}}

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
                <div class="card">
                    <div class="card-header">{{ __('Lengkapi Data') }}</div>
    
                    <div class="card-body">
                        <form action = "{{ route ('detailuser.store')}}" method = "POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control @error('telp_user') is-invalid @enderror" name="user_id" value="{{ (Auth::user()->id) }}">
                                        <label >User Nama</label>
                                        <input type="text" class="form-control @error('telp_user') is-invalid @enderror" name="" value="{{(Auth::user()->username)}}" readonly>
                                        {{-- <select class="form-control @error('user_id') is-invalid @enderror" name="user_id" aria-label="Default select example">
                                        <option value="">----</option>
                                        @foreach( $data as $item)
                                        <option value="{{ $item->id}}" @selected(old ('user_id') == $item->id)>{{$item ->nama_user}}</option>
                                        @endforeach
                                        </select> --}}
                                    </div>
                                    <div class="form-group">
                                        <label >No HP</label>
                                        <input type="number" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user" placeholder="Masukkan Nomor HP" value="{{ old('telp_user')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>

                                        <input type="hidden" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" placeholder="Masukkan Provinsi" value="{{ old('provinsi')}}" id="provinsi2">

                                        <select class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" onchange="daerah(value)" ></select>
                                    </div>
                                    <div class="form-group">
                                        <label >Kota/Kabupaten</label>
                                        {{-- <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Masukkan Kota" value="{{ old('kota')}}"> --}}
                                        <select class="form-control @error('provinsi') is-invalid @enderror" name="kota" id="kota" onchange="daerah(value)" value="{{ old('kota')}}"></select>
                                    </div>
                                    <div class="form-group">
                                        <label >Alamat</label>
                                        <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat')}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Kode Pos</label>
                                        <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Masukkan Kode Pos" value="{{ old('kode_pos')}}">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label >Foto KTP</label>
                                        <input type="file" class="form-control-file" name="ktp" placeholder="Masukkan Kode Pos">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label >Foto Wajah & KTP</label>
                                        <input type="file" class="form-control-file" name="selfi">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label >Foto Profil</label>
                                        <input type="file" class="form-control-file" name="profil">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                                <a href="/page/detailuser" class="btn btn-primary btn-sm mt-3">kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('../layouts/footer')