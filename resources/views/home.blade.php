<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>

<body>

    <br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Form API Hasil Analisa</div>
                    <div class="card-body">
                        <form method="get" action="" class="row g-3">
                            <div class="col-2">

                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="data_sampels_id">
                            </div>
                            <div class="col">

                                <input type="number" class="form-control" name="data_sampels_id">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <div class="col-auto">
                                <a href="/" type="cancel" class="btn btn-outline-danger">Reset URL</a>
                            </div>
                        </form>
                    </div>
                </div>
                <br>

                @if(!empty($data))
                <div class="card">
                    <div class="card-header">Hasil Analisis</div>
                    <div class="card-body">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="col-sm-1">data_sampels_id</th>
                                    <th class="col-sm-1">tahun</th>
                                    <th class="col-sm-1">simbol</th>
                                    <th class="col-sm-1">no_lab</th>
                                    <th class="col-sm-1">parameters_id_s</th>
                                    <th class="col-sm-1">kode_contoh</th>
                                    <th class="col-sm-1">batch</th>
                                    <th class="col-sm-1">hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-sm-1">{{$data['data_sampels_id']}}</td>
                                    <td class="col-sm-1">{{$data['tahun']}}</td>
                                    <td class="col-sm-1">{{$data['simbol']}}</td>
                                    <td class="col-sm-1">{{$data['no_lab']}}</td>
                                    <td class="col-sm-1">{{$data['parameters_id_s']}}</td>
                                    <td class="col-sm-1">{{$data['kode_contoh']}}</td>
                                    <td class="col-sm-1">{{$data['batch']}}</td>
                                    <td class="col-sm-1">{{$data['hasil']}}</td>
                                </tr>

                            </tbody>
                        </table>
                        @else
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{$errors->first()}}!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>