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
    <form action = "{{ route ('user.store')}}" method = "POST">
    @csrf
    
        <div class="form-group">
            <label >Nama Lengkap</label>
            <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" placeholder="masukkan nama" value="{{ old('nama_user')}}">
        </div>
        <div class="form-group">
            <label >No HP</label>
            <input type="number" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="masukkan email" value="{{ old('username')}}">
        </div>
        <div class="form-group">
            <label >Alamat</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="masukkan email" value="{{ old('email')}}">
        </div>
        <div class="form-group">
            <label >Kota</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="masukkan password" value="{{ old('password')}}">
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input type="text" class="form-control @error('password_confir') is-invalid @enderror" name="password_confir" placeholder="masukkan password" value="{{ old('password_confir')}}">
        </div>
        <div class="form-group">
            <label >Kode Pos</label>
            <input type="number" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" placeholder="masukkan nama" value="{{ old('nama_user')}}">
        </div>
        <div class="form-group">
            <label >Foto KTP</label>
            <input type="file" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" placeholder="masukkan nama" value="{{ old('nama_user')}}">
        </div>
        <div class="form-group">
            <label >Foto Wajah & KTP</label>
            <input type="file" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" placeholder="masukkan nama" value="{{ old('nama_user')}}">
        </div>
        <div class="form-group">
            <label >Foto Profil</label>
            <input type="file" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" placeholder="masukkan nama" value="{{ old('nama_user')}}">
        </div>
        <div class="row justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/page/detailuser" class="btn btn-primary btn-sm mt-3">kembali</a>
        </div>
</form>
@endsection