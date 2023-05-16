<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Wisata Adat Sulsel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <h2 class="text-center mt-2">Tambah Wisata Adat Sulsel</h2>
  <div class="container mt-3">
    <form action="/tambah" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama_tempat_wisata" class="form-label">Nama Tempat Wisata</label>
        <input type="text" class="form-control @error('nama_tempat_wisata') is-invalid @enderror"
          id="nama_tempat_wisata" name="nama_tempat_wisata">
        @error('nama_tempat_wisata')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="penjelasan_singkat" class="form-label">Penjelasan Singkat</label>
        <input type="text" class="form-control @error('penjelasan_singkat') is-invalid @enderror"
          id="penjelasan_singkat" name="penjelasan_singkat">
        @error('penjelasan_singkat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <a href="/" class="btn btn-danger">Kembali</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>
