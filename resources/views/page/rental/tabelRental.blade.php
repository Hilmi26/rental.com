@extends('index')

@section('main')

<div class="mt-5">
    <a href="{{ route ('rental.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

    <table class="table text-center text-warning bg-dark" id="dataTable">
        <thead>
            <tr>
                <th scope="col">No.</th>

                <th scope="col">Nama Rental</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Update At</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>

                <td>{{$item->nama_rental}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                {{-- <td>{{$item->nama_sekolah}}</td> --}}
                <td colspan="2">
                    <a href="{{ route('rental.edit',$item->id) }}" class="btn btn-success btn-sm mb-3">
                        edit
                    </a>
                    <a href="{{ route('deleterental',$item->id)}}" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus?')">delete</a>
                    {{-- <form action="{{ route('rental.destroy',$item->id)}}">
                    @method('delete')</form> --}}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
