<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>PETUGAS</title>
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
    @include('layouts.navbar')
  <form action="isipetugas" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="container">
      <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">id petugas</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="idpetugas"></textarea>
    </div>

      <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">nama petugas</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="namapetugas"></textarea>
    </div>

      <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">username</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="username"></textarea>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">password</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="password"></textarea>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">telp</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="telp"></textarea>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">level</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="level"></textarea>
    </div>

      @error('isilaporan')
      <div>{{ $message }}</div>
          @enderror
    </div>
   
    <div class="d-grid gap-2 col-4 mx-auto">
      <button class="btn btn-primary" type="submit">Send</button>
    </div>
  </form>
</body>

</html>