<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PengaduanMasyarakat.com</title>
</head>

<body>
    <div class="container">
        <center><h1>detail pengaduan masyarakat</h1></center>
    <table  style="margin-top: 2rem;" class="table">
        <thead>
          <tr>
            <th scope="col" class="table-warning">Id</th>
            <th scope="col" class="table-warning">Id_pengaduan</th>
            <th scope="col" class="table-warning">Tanggal</th>
            <th scope="col" class="table-warning">Tanggapan</th>
            <th scope="col" class="table-warning">Id_petugas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-secondary">{{$tanggapan->id_tanggapan}}</th>
            <td class="table-secondary">{{$tanggapan->Id_pengaduan}}</td>
            <td class="table-secondary">{{$tanggapan->tgl_ tanggapan}}</td>
            <td class="table-secondary">{{$tanggapan->tanggapan}}</td>
            <td class="table-secondary">{{$tanggapan->id_petugas}}</td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>