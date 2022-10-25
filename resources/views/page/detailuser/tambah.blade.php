@extends('index')
@section('main')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lengkapi Data') }}</div>
    
                    <div class="card-body">
                        <form action = "{{ route ('detailuser.store')}}" method = "POST" enctype="multipart/form-data">
                        @csrf
                        
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('telp_user') is-invalid @enderror" name="user_id" value="{{ (Auth::user()->id) }}">
                                <label >Nama</label>
                                <input type="text" class="form-control @error('telp_user') is-invalid @enderror" name="" value="{{(Auth::user()->username)}}">
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
                                <label >Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat')}}">
                            </div>
                            <div class="form-group">
                                <label >Kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Masukkan Kota" value="{{ old('kota')}}">
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" placeholder="Masukkan Provinsi" value="{{ old('provinsi')}}">
                            </div>
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
@endsection