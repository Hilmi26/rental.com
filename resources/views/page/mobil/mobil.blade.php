<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid py-5">
        <div class="card">
            <div class="card-body">
                <div class="ms-auto mb-3">
                    <a href="{{ url('/create_mobil') }}" type="button" class="btn btn-primary">Tambah
                        Data</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Rental</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Plat</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Transmisi</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Unit</th>
                        <th scope="col">History</th>
                        <th scope="col">Harga Sewa</th>
                        <th scope="col">Status Unit</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mobil as $item)
                      <tr class="text-center">

                        <th scope="row">{{ $loop->iteration }}</th>

                        <td>{{ $item->rental->nama_rental }}</td>
                        <td><img src="{{ asset('/') }}storage/{{ $item->foto_mobil }}" alt="" width="100px" ></td>
                        <td>{{ $item['merek'] }}</td>
                        <td>{{ $item['plat'] }}</td>
                        <td>{{ $item['warna'] }}</td>
                        <td>{{ $item['tipe'] }}</td>
                        <td>{{ $item['transmisi'] }}</td>
                        <td>{{ $item['tahun'] }}</td>
                        <td>{{ $item['unit'] }}</td>
                        <td>{{ $item['history_penyewaan'] }}</td>
                        <td>{{ $item['harga_sewa'] }}</td>
                        <td>{{ $item['status_unit'] }}</td>
                        <td>

                                <div class="mb-1">
                                    <a href="" type="button"
                                    class="btn btn-sm btn-dark px-3" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Edit"> Edit
                                    {{-- <i class="ti-file"></i> --}}
                                </a>
                                </div>
                                <form action="/mobil/{{ $item->id }}" method="post" style="display: inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm ('Yakin akan menghapus data?')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Delete"> Delete
                                        {{-- <i class="ti-trash"></i> --}}
                                    </button>
                                </form>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>

        </div>
    </div>

</body>
</html>
