@extends('index')
@section('main')

    <form action = "{{ url ('page/user/'.$data->id)}}" method = "POST">
    @csrf
    @method('put')
        <div class="form-group">
            <label >Nama Lengkap</label>
            <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{$data->nama_user}}">
        </div>
        <div class="form-group">
            <label >User Name</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->username}}">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}">
        </div>
            <label >Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="masukkan password" value="{{$data->password}}">
        <div class="row justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/page/user" class="btn btn-primary btn-sm mt-3">kembali</a>
        </div>
</form>
@endsection