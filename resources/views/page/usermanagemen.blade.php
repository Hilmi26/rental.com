@extends('layouts.app', [
'namePage' => 'Table List',
'class' => 'sidebar-mini',
'activePage' => 'table',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Management</h4>
                    <a href="{{ route ('user.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th scope="col">No.</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Update At</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @foreach($data as $item)

                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>

                                    <td>{{$item->nama_user}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td colspan="2">
                                        <a href="{{ url ('page/user/'.$item->id. '/edit')}}" class="btn btn-success btn-sm mb-3">
                                            edit
                                        </a>
                                        <a href="{{ url ('deleteuser/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
