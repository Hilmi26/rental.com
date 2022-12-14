@include('../layouts/navbar')

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
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                    <div class="card-body">
                        <form action = "{{ url ('page/user/'.$data->id)}}" method = "POST">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                <label >Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{$data->nama_user}}">
                            </div>
                            <div class="form-group">
                                <label >User Name</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->username}}">
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}">
                            </div >
                            
                            {{-- <div class="form-group">
                                <label >Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="masukkan password" value="">
                            </div>
                            <div class="form-group">
                                <label>Password Confirmation</label>
                                <input type="password" class="form-control @error('password_confir') is-invalid @enderror" name="password_confir" placeholder="masukkan password" value="">
                            </div> --}}
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                                <a href="/page/user" class="btn btn-primary btn-sm mt-3">kembali</a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@include('../layouts/footer')