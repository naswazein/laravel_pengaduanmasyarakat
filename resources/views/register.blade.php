<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-image: url("https://thumbs.dreamstime.com/b/pink-glitter-texture-abstract-background-christmas-82905940.jpg");
        }
    </style>
</head>
<body>
    <h1 class="text-center text-white" style="margin-top:85px">REGISTER</h1>
    @if(session("error"))
    <div class="alert alert-danger">{{session("error")}}</div>
    @endif  
    <div class="container" style="margin-top: 30px;">
    <form method="post">
        @method("POST")
        @csrf
  <div class="row mb-3 justify-content-center">
    <div class="col-8">
    <label for="nik" class="form-label">nik</label>
    <input type="text" class="form-control" id="nik" name="nik">
    </div>
    <div class="col-8">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="col-8">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="col-8">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="col-8">
    <label for="telp" class="form-label">telp</label>
    <input type="text" class="form-control" id="telp" name="telp">
    </div>
</div>
<center>
  <button type="submit" class="btn btn-primary">Submit</button>
</center>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>