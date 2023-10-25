<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- @include('layouts.navbar') -->
    <h1> Register </h1>
    <form method='post' action={{url('register')}}> 
        @method('POST')
        @csrf
    <div>
        NIK : <input type="text" name="nik" id="">
    </div>
    <div>
        Nama : <input type="text" name="nama" id="">
    </div>
    <div>
        Username : <input type="text" name="username" id="">
    </div>
    <div>
        Password : <input type="password" name="password" id="">
    </div>
    <div>
        Telp : <input type="text" name="telp" id="">
    </div>
    <div class="d-grid gap-2 col-4 mx-auto">
        <br>
      <button class="btn btn-primary" type="submit">Send</button>
      <input type="submit" name="submit" 
      <br>
            <p>have an account? <a href=login>login</a></p>
    </div>
</form>
</body>
</html>