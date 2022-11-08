@extends('tampilan')
@section('main')

    <form action = "{{ route('rental.update', $data->id)}}" method = "POST" enctype="multipart/form-data">
    @csrf
    @method('put')
        <div class="form-group">
            <label >Nama Rental</label>
            <input type="text" class="form-control @error('nama_rental') is-invalid @enderror" name="nama_rental" value="{{$data->nama_rental}}">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label >Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->username}}">
        </div>
            <label >Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="masukkan password" value="{{$data->password}}">
        <div class="row justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/rental" class="btn btn-primary btn-sm mt-3">kembali</a>
        </div>
</form>
@endsection