<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PengaduanMasyarakat.com</title>
</head>

<body>
    <form action="{{ route('insertTanggapanPetugas') }}" method="POST" enctype="multipart/form-data">
        <div class="container">
            <center>
                <h1>Detail Pengaduan Masyarakat</h1>
            </center>
            <table style="margin-top: 2rem;" class="table">
                <thead>
                    <tr>
                        <th scope="col" class="table-warning">NIK</th>
                        <th scope="col" class="table-warning">Tanggal Laporan</th>
                        <th scope="col" class="table-warning">Isi Laporan</th>
                        <th scope="col" class="table-warning">Foto</th>
                        <th scope="col" class="table-warning">Beri Tanggapan Anda!</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-secondary">{{ $pengaduan->nik }}</td>
                        <td class="table-secondary">{{ $pengaduan->tgl_pengaduan }}</td>
                        <td class="table-secondary">{{ $pengaduan->isi_laporan }}</td>
                        <td class="table-secondary">{{ $pengaduan->foto }}</td>
                        <td class="table-secondary">
                            <div class="mb-3">
                                @method('post')
                                @csrf
                                @auth('petugas')
                                    <input type="text" hidden value="{{ $pengaduan->id_pengaduan }}" name="id_pengaduan">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_tanggapan" rows="3"></textarea>
                                @endauth
                                <input class="btn btn-primary" type="submit" value="Tanggapi">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </form>
    <h2>Tanggapan</h2>
    {{-- <div class="media border p-3">
        @foreach ($tanggapan as $tanggapan)
            <div class="media-body">
                <h4>Petugas<small>|<i>{{ $tanggapan->nama_petugas }}</i></small></h4>
                <p>{{ $tanggapan->tanggapan }}</p>
            </div>
        @endforeach
    </div> --}}
    {{-- </div> --}}
</body>

</html>
