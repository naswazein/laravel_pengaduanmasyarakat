<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
      <title>Document</title>
</head>

<body>
  @include('layouts.navP')
  <div class="container">
  <center> <h1>Data Petugas</h1> </center>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Telp</th>
          <th scope="col">Level</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
       @foreach($petugas as $data)
        <tbody>
          <td scope="row">
            <?= $data->id?>
          </td>
          <td>
            <?= $data->nama_petugas?>
          </td>
          <td>
            <?= $data->username?>
          </td>
          <td>
            <?= $data->password?>
          </td>
          <td>
            <?= $data->telp?>
          </td>
          <td>
            <?= $data->level?>
          </td>
          <td>
          <a type="button"class="btn btn-danger" href={{url("/hapus-petugas/$data->id")}}>Delete</a> 
          <a type="button"class="btn btn-primary" href={{url("/detail-petuagas/$data->id")}}>Detail</a> 
          <a type="button"class="btn btn-success"href={{url("/update/$data->id")}}>Update</buttaon> 
          </td    
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
  </div>
</body>

</html> -->