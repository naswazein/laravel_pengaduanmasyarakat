<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>Update Pengaduan</title>
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <form action={{url("/petugas/update/$pengaduan->id_pengaduan")}} method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="container">
      <br>
      <br>
      <center>
      <td><h2>update Petugas</h2></td>
</center>
      <div class="mb-3">
      </div>
      <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required>{{$pengaduan->isi_laporan}}</textarea>
      @error('isi_laporan')
      <div>{{ $message }}</div>
          @enderror
          <br>
          <select class="form-select" aria-label="Default select example" name="status">
  <option selected>Open this select menu</option>
  <option value="0">0</option>
  <option value="proses">Proses</option>
  <option value="selesai">Selesai</option>
</select>
          <br>
    <div class="d-grid gap-2 col-4 mx-auto">
      <button class="btn btn-primary" type="submit">Send</button>
    </div>
  </form>
</body>

</html>