{{-- Hilmi --}}
@include('layouts.navbar.navbar')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb') }}/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Edit Car Data</h1>
            </div>
        </div>
    </div>
</section>

    <div class="container py-5">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Data Mobil</h4>

                                <form class="forms-sample" action="{{ route('mobil.update', $mobil->id) }}"
                                    method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label>Rental</label>
                                        <input type="text"
                                            class="form-control @error('rental_id') is-invalid @enderror"
                                            name="rental_id" placeholder="Masukkan Rental"
                                            value="{{ $mobil->rental_id }}" readonly>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="foto_mobil">Image</label>
                                        <input class="form-control" type="file" name="foto_mobil"
                                            value="{{ $mobil->foto_mobil }}">
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label>Gambar Mobil</label>
                                        <input type="text"
                                            class="form-control @error('foto_mobil') is-invalid @enderror"
                                            name="foto_mobil" placeholder="Masukkan Gambar Mobil"
                                            value="{{ $mobil->foto_mobil }}">
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Merek</label>
                                        <input type="text" class="form-control @error('merek') is-invalid @enderror"
                                            name="merek" placeholder="Masukkan Gambar Mobil"
                                            value="{{ $mobil->merek }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Plat</label>
                                        <input type="text" class="form-control @error('plat') is-invalid @enderror"
                                            name="plat" placeholder="Masukkan Plat Mobil"
                                            value="{{ $mobil->plat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text" class="form-control @error('warna') is-invalid @enderror"
                                            name="warna" placeholder="Masukkan Warna Mobil"
                                            value="{{ $mobil->warna }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe</label>
                                        <input type="text" class="form-control @error('tipe') is-invalid @enderror"
                                            name="tipe" placeholder="Masukkan Tipe Mobil"
                                            value="{{ $mobil->tipe }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Transmisi</label>
                                        <select class="form-control  @error('transmisi') is-invalid @enderror"
                                            name="transmisi">
                                            {{-- <option>Pilih Transmisi</option> --}}
                                            <option value="{{ $mobil->transmisi }}">{{ $mobil->transmisi }}</option>
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
                                        <input type="text" class="form-control @error('unit') is-invalid @enderror"
                                            name="unit" placeholder="Masukkan Unit Mobil"
                                            value="{{ $mobil->unit }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Sewa</label>
                                        <input type="text"
                                            class="form-control @error('harga_sewa') is-invalid @enderror"
                                            name="harga_sewa" placeholder="Masukkan harga sewa Mobil"
                                            value="{{ $mobil->harga_sewa }}">
                                    </div>
                                    <div class="form-group">
                                        <label>History Penyewaan</label>
                                        <input type="text"
                                            class="form-control @error('history_penyewaan') is-invalid @enderror"
                                            name="history_penyewaan" placeholder="Masukkan harga sewa Mobil"
                                            value="{{ $mobil->history_penyewaan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Unit</label>
                                        <select class="form-control  @error('status_unit') is-invalid @enderror"
                                            name="status_unit">
                                            {{-- <option>Pilih Status Unit</option> --}}
                                            <option value="{{ $mobil->status_unit }}">{{ $mobil->status_unit }}</option>
                                            <option value="Ready">Ready</option>
                                            <option value="Unavailable">Unavailable</option>
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
                                        <button type="submit" class="btn btn-primary me-2">Update</button>
                                        <a href="{{ url('/mobil') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

@
