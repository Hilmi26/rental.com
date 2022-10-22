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
    <form action = "{{ route ('detailuser.store')}}" method = "POST" enctype="multipart/form-data">
    @csrf
    @method('put') 
    
        <div class="form-group">
            <label >Nama</label>
            <input type="number" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user"  value="{{$data->nama_user}}">
        </div>
        <div class="form-group">
            <label >No HP</label>
            <input type="number" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user"  value="{{$data->telp_user}}">
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

        <div class="form-group">
            <label >Kode Pos</label>
            <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
        </div>

        <div class="form-group">
            <label >Foto KTP</label>
            <img src="{{ asset('storage/'. $data->ktp )}}" height="100" alt="">
            <input type="file" class="form-control-file" name="ktp">
            
        </div>

        <div class="form-group">
            <label >Foto Wajah & KTP</label>
            <img src="{{ asset('storage/'. $data->wajah_ktp)}}" height="100" alt="">
            <input type="file" class="form-control-file" name="selfi">
        </div>

        <div class="form-group">
            <label >Foto Profil</label>
            <img src="{{ asset('storage/'. $data->foto_profil)}}" height="100" alt="">
            <input type="file" class="form-control-file" name="profil">
        </div>

        <div class="row justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/page/detailuser" class="btn btn-primary btn-sm mt-3">kembali</a>
        </div>
</form>
@endsection