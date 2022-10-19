@extends('index')

@section('main')

<div class="mt-5">
<a href="{{ route ('detailuser.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

<table class="table text-center text-warning bg-dark" id="dataTable">
  <thead>
    <tr>
      <th scope="col">No.</th>
      
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
            
            <td>{{$item->nama_user}}</td>
            <td>{{$item->telp_user}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kota}}</td>
            <td>{{$item->provinsi}}</td>
            <td>{{$item->kode_pos}}</td>
            {{-- <td>{{$item->ktp}}</td> --}}
            <td><img src="{{ Storage::url('public/blogs/').$item->ktp }}" class="rounded" style="width: 150px"></td>
            {{-- <td>{{$item->wajah_ktp}}</td> --}}
            <td><img src="{{ Storage::url('public/blogs/').$item->wajah_ktp }}" class="rounded" style="width: 150px"></td>
            {{-- <td>{{$item->foto_profil}}</td> --}}
            <td><img src="{{ Storage::url('public/blogs/').$item->foto_profil }}" class="rounded" style="width: 150px"></td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            {{-- <td>{{$item->nama_sekolah}}</td> --}}
            <td colspan="2">

              {{-- <a href="{{ url ('siswa/edit')}}/{{$item->id}}" class="btn btn-success btn-sm mb-3">
                <i class="fa-solid fa-pen"></i>
              </a> --}}

              <a href="{{ url ('page/user/'.$item->id. '/edit')}}" class="btn btn-success btn-sm mb-3">
                edit
              </a>

              {{-- <a href="{{ route ('siswa.edit', $item->id)}}" class="btn btn-success btn-sm mb-3">
                <i class="fa-solid fa-pen"></i>
              </a> --}}

              {{-- <i class="fa-solid fa-pipe"></i> --}}

              {{-- <a href="{{ url ('deletesiswa/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                <i class="fa-solid fa-trash"></i>
              </a> --}}

              {{-- <form action="{{ route('siswa.destroy', $item->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash"></i> </button>
              </form> --}}
            </td>
        </tr>
    @endforeach
   
  </tbody>
</table>
</div>''

@endsection