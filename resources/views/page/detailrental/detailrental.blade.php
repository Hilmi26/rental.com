@extends('tampilan')

@section('main')

<div class="mt-5">
    <a href="{{ route ('detail_rental.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

    <table class="table text-center text-warning bg-secondary" id="datatable" name="datatable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Rental ID</th>
                <th scope="col">Telpon Rental</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kode Pos</th>
                <th scope="col">KTP Rental</th>
                <th scope="col">KTP Wajah</th>
                <th scope="col">Koordinat</th>
                <th scope="col">Foto Profil</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>

                <td>{{$item->id}}</td>
                <td>{{$item->rental->nama_rental}}</td>
                <td>{{$item->telp_rental}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->kota}}</td>
                <td>{{$item->provinsi}}</td>
                <td>{{$item->kode_pos}}</td>
                <td><img src="{{ asset('storage/'.$item->ktp)}}" width="70px" class="rounded"></td>
                <td><img src="{{ asset('storage/'.$item->wajah_ktp)}}" width="70px" class="rounded"></td>
                <td><img src="{{ asset('storage/'.$item->koordinat)}}" width="70px" class="rounded"></td>
                <td><img src="{{ asset('storage/'.$item->foto_profil)}}" width="70px" class="rounded"></td>
                <td colspan="2">
                    <a href="{{ route('detail_rental.edit',$item->id) }}" class="btn btn-success btn-sm mb-3">
                        edit
                    </a>
                    <a href="{{ route('detail_rental.destroy',$item->id) }}" class="btn btn-danger"> Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
