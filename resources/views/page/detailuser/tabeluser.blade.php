@extends('index')

@section('main')

<div class="mt-5">
<a href="{{ route ('detailuser.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

<table class="table text-center text-warning bg-dark" id="dataTable">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">id</th>
      <th scope="col">Nama User</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kota</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kode pos</th>
      <th scope="col">Foto KTP</th>
      <th scope="col">Foto Wajah & KTP</th>
      <th scope="col">Foto Profil</th>
      <th scope="col">Created_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
        
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->id}}</td>
            <td>{{$item->user->nama_user}}</td>
            <td>{{$item->telp_user}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kota}}</td>
            <td>{{$item->provinsi}}</td>
            <td>{{$item->kode_pos}}</td>
            <td><img src="{{ asset('storage/'. $item->ktp) }}" height="100px" alt=""></td>
            <td><img src="{{ asset('storage/'. $item->wajah_ktp) }}" height="100px" alt=""></td>
            <td><img src="{{ asset('storage/'. $item->foto_profil) }}" height="100px" alt=""></td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td colspan="2">
              <a href="{{ url ('page/detailuser/'.$item->id. '/edit')}}" class="btn btn-success btn-sm mb-3">
                edit
              </a>
            </td>
        </tr>
    @endforeach
   
  </tbody>
</table>
</div>

@endsection