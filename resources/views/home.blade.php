
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    {{-- {{$judul}}
  
    @foreach($pengaduan as $pengaduan)
    <p>{{$pengaduan->nik}} - {{ $pengaduan->isi_laporan}}</p>
  @endforeach --}}

   {{-- @include('layouts.navbar')
    <h1>{{$TextJudul}}</h1>  --}}
 <div class="container">
    <div class="mb-3">
        <div class="page">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 style="text-align-center;">Selamat datang</h1>
            <h3 style="text-align-center;">Laporan Pengaduan Masyarakat</h3>
            <p style="text-align-center;">Sampaikan laporan anda langsung kepada instansi pemerintah yang berwenang</p>
    <br>
    <center>
        <td><a href="{{url('isipengaduan')}}">Silahkan Lapor</a>
     <center>
    
</div>
</div>
</div> 
</body>
</html>
