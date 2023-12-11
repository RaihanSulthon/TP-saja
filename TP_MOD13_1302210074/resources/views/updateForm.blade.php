<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body class="d-flex min-vh-100 text-center justify-content-center align-items-center">
        <div class="container w-100 px-3 py-4 border border border-warning rounded-3">
            <form action="/update" method = "post">
                @csrf
                <input type="hidden" name="id" value="{{ $pegawai->id }}">
                <div class="row justify-content-start align-items-center mb-4">
                    <div class="col-2">
                        Name
                    </div>
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" value = "{{$pegawai->name}}">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center mb-4">
                    <div class="col-2">
                        Posisi
                    </div>
                    <div class="col-10">
                        <input type="text" name="posisi" class="form-control" value = "{{$pegawai->posisi}}">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center mb-4">
                    <div class="col-2">
                        Gaji
                    </div>
                    <div class="col-10">
                        <input type="text" name="gaji" class="form-control" value = "{{$pegawai->gaji}}">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center mb-4">
                    <div class="col-1">
                        <button class="btn btn-success">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>