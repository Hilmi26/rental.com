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
                    <div class="card-header">{{ __('Edit') }}</div>
    
                    <div class="card-body">
                        <form action = "{{ url ('page/detailuser/'.$data->id)}}" method = "POST" enctype="multipart/form-data">
                        @csrf
                        @method('put') 
                        
                            <div class="form-group">
                                
                                <label >Nama</label>
                                <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id"  value="{{$data->id}}">

                                <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="username"  value="{{$data->user->username}}">
                            </div>

                            <div class="form-group">
                                <label >No HP</label>
                                <input type="text" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user"  value="{{$data->telp_user}}">
                            </div>

                            <div class="form-group">
                                <label >Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{$data->alamat}}">
                            </div>

                            <div class="form-group">
                                <label >Kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{$data->kota}}">
                            </div>

                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{$data->provinsi}}">
                            </div>

                            <div class="form-group mb-2">
                                <label >Kode Pos</label>
                                <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
                            </div>

                            <img src="{{ asset('storage/'. $data->ktp )}}" height="100" alt="" class="mt-2">

                            <div class="form-group mt-2">
                                <label >Foto KTP</label>
                                <input type="file" class="form-control-file" name="ktp"  value="{{$data->ktp}}">
                            </div>

                            <img src="{{ asset('storage/'. $data->wajah_ktp)}}" height="100" alt="" class="mt-2">

                            <div class="form-group mt-2">
                                <label >Foto Wajah & KTP</label>
                                <input type="file" class="form-control-file mt-1" name="wajah_ktp"  value="{{$data->wajah_ktp}}">
                            </div>

                            <img src="{{ asset('storage/'. $data->foto_profil)}}" height="100" alt="" class="mt-2">

                            <div class="form-group mt-2">
                                <label >Foto Profil</label>
                                <input type="file" class="form-control-file mt-1" name="foto_profil"  value="{{$data->foto_profil}}">
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
@endsection