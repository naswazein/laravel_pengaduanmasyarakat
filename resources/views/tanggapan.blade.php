<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/forms/layout/">
    <title>Document</title>
</head>
<body>
    <form action={{url("/tanggapan_petugas")}} method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Example label</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>
</body>
</html>