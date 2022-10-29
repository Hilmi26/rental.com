@include('layouts.navbar.navbar')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/sb')}}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="/index">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Data User<i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Data User</h1>
      </div>
    </div>
  </div>
</section>
<div class="mt-5 mb-5">
<a href="{{ route ('user.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

<table class="table text-center text-warning bg-dark" id="dataTable">
  <thead>
    <tr>
      <th scope="col">No.</th>
      
      <th scope="col">Nama User</th>
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
            
            <td>{{$item->nama_user}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
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

              <a href="{{ url ('deleteuser/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                Hapus
              </a>

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
</div>

@include('layouts.footer.footer')