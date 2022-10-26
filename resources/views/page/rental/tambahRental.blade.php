@extends('tampilan')
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
<form action="{{route('rental.store')}}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control @error('nama_rental') is-invalid @enderror" name="nama_rental" placeholder="Masukkan Nama" value="{{ old('nama_rental')}}">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username" value="{{ old('username')}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email" value="{{ old('email')}}">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" value="{{ old('password')}}">
    </div>
    <div class="form-group">
        <label>Password Confirmation</label>
        <input type="password" class="form-control @error('password_confir') is-invalid @enderror" name="password_confir" placeholder="Masukkan Password" value="{{ old('password_confir')}}">
    </div>
    <div class="row justify-content-between">
        <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
        <a href="/rental" class="btn btn-danger btn-sm mt-3">kembali</a>
    </div>
</form>
@endsection
