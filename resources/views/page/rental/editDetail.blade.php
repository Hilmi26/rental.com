@extends('index')

@section('main')
<div>
    <form action="{{ route('detail_rental.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put') 
        
        <div class="form-group">
            <label>ID</label>
           <input type="text" class="form-control @error('id') is-invalid @enderror" name="id"  value="{{$data->id}}">
        </div>
        <div class="form-group">
            <label>Rental ID</label>
           <input type="text" class="form-control @error('rental_id') is-invalid @enderror" name="rental_id" value="{{$data->rental->nama_rental}}">
        </div>
        <div class="form-group">
            <label>Telpon Rental</label>
            <input type="number" class="form-control @error('telp_rental') is-invalid @enderror" name="telp_rental" value="{{$data->telp_rental}}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{$data->alamat}}">
        </div>
        <div class="form-group">
            <label>Kota</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{$data->kota}}">
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{$data->provinsi}}">
        </div>
        <div class="form-group">
            <label>Kode Pos</label>
            <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
        </div>

        <img src="{{ asset('storage/'. $data->ktp )}}" height="100" alt="" class="mt-2">

        <div class="form-group">
            <label>KTP</label>
            <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp" value="{{$data->ktp}}">
        </div>

        <img src="{{ asset('storage/'. $data->wajah_ktp)}}" height="100" alt="" class="mt-2">

        <div class="form-group">
            <label>Wajah</label>
            <input type="file" class="form-control @error('wajah_ktp') is-invalid @enderror" name="wajah_ktp" value="{{$data->wajah_ktp}}">
        </div>

        <img src="{{ asset('storage/'. $data->koordinat)}}" height="100" alt="" class="mt-2">

        <div class="form-group">
            <label>koordinat</label>
            <input type="file" class="form-control @error('koordinat') is-invalid @enderror" name="koordinat" value="{{$data->koordinat}}">
        </div>

         <img src="{{ asset('storage/'. $data->foto_profil)}}" height="100" alt="" class="mt-2">

        <div class="form-group">
            <label>Foto Profil</label>
            <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" value="{{$data->foto_profil}}">
        </div>
        <div class="row justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/rental" class="btn btn-danger btn-sm mt-3">kembali</a>
        </div>
    </form>
</div>
@endsection
