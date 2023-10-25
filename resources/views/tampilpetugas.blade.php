<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
      <title>Document</title>
</head>

<body>
  @include('layouts.navbar')
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id Petugas</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Telp</th>
          <th scope="col">Level</th>
        </tr>
      </thead>
      @foreach($petugas as $data)
        <tbody>
          <td scope="row">
            <?= $data->id_petugas ?>
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
          <td style="vertical-align:middle">
            <form action="proses_hapus.php?id_petugas=<?= $data->id_petugas?>" method="post">
              <button type="submit" class="btn btn-danger">
                DELETE
              </button>
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
  </div>
</body>

</html>