{{-- Hilmi --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <div class="container py-5">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Data Mobil</h4>

                                <form class="forms-sample" action="/page/mobil/mobil/
                                    {{ $mobil->id }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-group">
                                        <label for="foto_mobil">Image</label>
                                        <input class="form-control" type="file" name="foto_mobil"
                                            value="{{ $mobil->foto_mobil }}">
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <a href="{{ url('/mobil') }}" class="btn btn-danger">Cancel</a>
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
