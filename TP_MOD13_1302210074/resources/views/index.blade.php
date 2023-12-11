<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="d-flex min-vh-100 text-center justify-content-center align-items-center">
    <div class="container w-100 px-3 py-4 border border border-warning rounded-3">
      <table class="table">
        <tr>
          <th>Nama</th>
          <th>Posisi</th>
          <th>Gaji</th>
          <th>Aksi</th>
        </tr>
        @foreach($pegawai as $w)
        <form action="/updateForm/{{ $w -> id }}" method="get">
          @csrf
          <tr>
            <td>{{$w -> name}}</td>
            <td>{{$w -> posisi}}</td>
            <td>{{$w -> gaji}}</td>
            <td>
              <input type="hidden" name="id" value="{{ $w->id }}">
              <button class="btn btn-success" type="submit">Update</button>
            </td>
          </tr>
        </form>
        @endforeach
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>