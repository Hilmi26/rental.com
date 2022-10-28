@extends('index')

@section('main')
<div>
    <form action="{{ route ('detail_rental.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Rental</label>
            <select class="form-control @error('rental_id') is-invalid @enderror bg-white" name="rental_id">
                <option value="" disabled>Pilih rental</option>
                @foreach($data as $item)
                <option value="{{$item->id}}" @selected(old('rental_id')==$item->id)>{{$item->nama_rental}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Telpon Rental</label>
            <input type="number" class="form-control @error('telp_rental') is-invalid @enderror" name="telp_rental" placeholder="Masukkan Telpon" value="{{ old('telp_rental')}}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat')}}">
        </div>
        <div class="form-group">
            <label>Kota</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Masukkan Kota" value="{{ old('kota')}}">
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" placeholder="Masukkan Provinsi" value="{{ old('provinsi')}}">
        </div>
        <div class="form-group">
            <label>Kode Pos</label>
            <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Masukkan Kode Pos" value="{{ old('kode_pos')}}">
        </div>
        <div class="form-group">
            <label>KTP</label>
            <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp" placeholder="Masukkan KTP" value="{{ old('ktp')}}">
        </div>
        <div class="form-group">
            <label>Wajah KTP</label>
            <input type="file" class="form-control @error('wajah_ktp') is-invalid @enderror" name="wajah_ktp" placeholder="Masukkan Foto Wajah" value="{{ old('password_confir')}}">
        </div>
        <div class="form-group">
            <label>koordinat</label>
            <input type="file" class="form-control @error('koordinat') is-invalid @enderror" name="koordinat" placeholder="Masukkan koordinat" value="{{ old('koordinat')}}">
        </div>
        <div class="form-group">
            <label>Foto Profil</label>
            <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" placeholder="Masukkan Foto Profil" value="{{ old('foto_profil')}}">
        </div>
        <div class="row justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/rental" class="btn btn-danger btn-sm mt-3">kembali</a>
        </div>
    </form>
</div>
@endsection
