
@include('layouts.navbar.navbar')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb')}}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="/index">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Datail User<i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Datail User</h1>
      </div>
    </div>
  </div>
</section>

<div class="mt-5 mb-5">
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
            <td>{{$item->user->username}}</td>
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
              <a href="{{ url ('deletdetailuser/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                Hapus
              </a>
            </td>
        </tr>
    @endforeach
   
  </tbody>
</table>
</div>

@include('layouts.footer.footer')