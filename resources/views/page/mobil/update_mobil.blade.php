<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container py-5">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Data Mobil</h4>

                                <form class="forms-sample" action="/page/mobil/{{$mobil->id}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Rental</label>
                                        <input type="text"
                                            class="form-control @error('rental_id') is-invalid @enderror" name="rental_id"
                                            placeholder="Masukkan Rental" value="{{ $mobil->rental_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar Mobil</label>
                                        <input type="text"
                                            class="form-control @error('foto_mobil') is-invalid @enderror"
                                            name="foto_mobil" placeholder="Masukkan Gambar Mobil"
                                            value="{{ $mobil->foto_mobil }}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Merek</label>
                                        <input type="text"
                                            class="form-control @error('merek') is-invalid @enderror"
                                            name="merek" placeholder="Masukkan Gambar Mobil"
                                            value="{{ $mobil->merek }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Plat</label>
                                        <input type="text"
                                            class="form-control @error('plat') is-invalid @enderror" name="plat"
                                            placeholder="Masukkan Plat Mobil" value="{{ $mobil->plat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text"
                                            class="form-control @error('warna') is-invalid @enderror" name="warna"
                                            placeholder="Masukkan Warna Mobil" value="{{ $mobil->warna }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe</label>
                                        <input type="text"
                                            class="form-control @error('tipe') is-invalid @enderror" name="tipe"
                                            placeholder="Masukkan Tipe Mobil" value="{{ $mobil->tipe }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Transmisi</label>
                                        <select class="form-control  @error('transmisi') is-invalid @enderror"
                                            name="transmisi">
                                            {{-- <option>Pilih Transmisi</option> --}}
                                            <option value="{{ $mobil->id }}">{{ $mobil->transmisi }}</option>
                                            <option value="Automatic">Automatic</option>
                                            <option value="Manual">Manual</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="number" min="1990"
                                            class="form-control @error('tahun') is-invalid @enderror" name="tahun"
                                            placeholder="Masukkan Tahun Mobil" value="{{ $mobil->tahun }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input type="text"
                                            class="form-control @error('unit') is-invalid @enderror" name="unit"
                                            placeholder="Masukkan Unit Mobil" value="{{ $mobil->unit }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Sewa</label>
                                        <input type="text"
                                            class="form-control @error('harga_sewa') is-invalid @enderror" name="harga_sewa"
                                            placeholder="Masukkan harga sewa Mobil" value="{{ $mobil->harga_sewa }}">
                                    </div>
                                    <div class="form-group">
                                        <label>History Penyewaan</label>
                                        <input type="text"
                                            class="form-control @error('history_penyewaan') is-invalid @enderror" name="history_penyewaan"
                                            placeholder="Masukkan harga sewa Mobil" value="{{ $mobil->harga_penyewaan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Unit</label>
                                        <select class="form-control  @error('status_unit') is-invalid @enderror"
                                            name="status_unit">
                                            {{-- <option>Pilih Status Unit</option> --}}
                                            <option value="{{ $mobil->id }}">{{ $mobil->status_unit }}</option>
                                            <option value="Ready">Ready</option>
                                            <option value="Dalam Peminjaman">Dalam Peminjaman</option>
                                            <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                                        </select>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label>Sekolah</label>
                                        <select class="form-control  @error('sekolah_id') is-invalid @enderror"
                                            name="sekolah_id">
                                            <option>Pilih Sekolah</option>
                                            @foreach ($sekolah as $item)
                                                <option value="{{ $item->id }}" @selected(old('sekolah_id') == $item->id)>
                                                    {{ $item->nama_sekolah }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                   <div class="mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="{{ url('/page/mobil') }}" class="btn btn-danger">Cancel</a>
                                   </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>

</body>
</html>