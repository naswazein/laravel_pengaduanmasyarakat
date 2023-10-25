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
  <h1>{{$judul}}</h1>
  @include('layouts.navbar')
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Isi Laporan</th>
          <th scope="col">Foto</th>
          <th scope="col">Status</th>
          <th scope="col">^</th>
        </tr>
      </thead>
       @foreach($pengaduan as $data)
        <tbody>
          <td scope="row">
            <?= $data->id_pengaduan ?>
          </td>
          <td>
            <?= $data->tgl_pengaduan?>
          </td>
          <td>
            <?= $data->isi_laporan?>
          </td>
          <td><img src={{asset("storage/image/$data->foto")}} width="250px"> </td>
          <td><button type="button" class="btn btn-info mt-4 text-white" style="background-color: #fbd0d9;" disabled>
              <?php echo $data->status; ?>
            </button></td>
          <td>
            <a href={{url("/hapus-pengaduan/$data->id_pengaduan")}}>Delete</a>  
            <a href={{url("/detail-pengaduan/$data->id_pengaduan")}}">Detail</a>
            <a href={{url("/update/$data->id_pengaduan")}}">Update</a>   

                </td    
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
  </div>
</body>

</html>