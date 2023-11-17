<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class petugascontroller extends Controller
{
    function index()
    {
        $judul = 'Selamat Datang';
        $pengaduan = DB::table('pengaduan')->get();

        return view('petugas/home');
        // 'petugas' => $petugas]);
    }

    function insertTanggapan(Request $request)
    {
        // return 'insert tanggapan';
        DB::table('tanggapan')->insert([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => date('Y-m-d'),
            'id_petugas' => Auth::guard('petugas')->user()->id,
            'tanggapan' => $request->isi_tanggapan
        ]);

        return "berhasil";
    }

    function home()
    {
        return view('petugas/home');
    }

    function pengaduan()
    {
        $data = 'Data Laporan';

        return view('isipengaduan', ['TextJudul' => $data]);
    }

    function tampilan()
    {
        $tampilan = 'Data Laporan';

        return view('tampilan', ['TextJudul' => $tampilan]);
    }

    function tampilpengaduan()
    {
        $judul = '';
        $pengaduan = DB::table('pengaduan')->get();

        return view('tampilpengaduanP', ['judul' => $judul, 'pengaduan' => $pengaduan]);
    }

    function tampilpetugas()
    {
        $judul = 'Selamat Datang';
        $petugas = DB::table('petugas')->get();

        return view('tampilpetugas', ['judul' => $judul, 'petugas' => $petugas]);
    }

    function hapus($id)
    {
        $deleted = DB::table('petugas')
            ->where('id', $id)
            ->delete();
        if ($deleted) {
            return redirect()->back();
        }
    }
    function detail($id)
    {
        echo $id;
    }
    function detailpengaduanP($id)
    {
        $petugas = DB::table('pengaduan')
            ->where('id_pengaduan', $id)
            ->first();
        return view('detailpengaduanP', ['pengaduan' => $petugas]);
    }
    function update_petugas($id)
    {
        $pengaduan = DB::table('pengaduan')
            ->where('id_pengaduan', $id)
            ->first();
        return view('updateP', ['pengaduan' => $pengaduan]);
    }

    function proses_update_petugas(Request $request, $id)
    {
        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')
            ->where('id_pengaduan', $id)
            ->update(['isi_laporan' => $isi_laporan, 'status' => $request->status]);

        return redirect('/petugas/tampilpengaduan');
    }

    function detailpengaduan($id)
    {
        $pengaduan = pengaduan::where('id_pengaduan', $id)->first();
        //$tanggapan = tanggapan::where('id_pengaduan' , $id)->get();
        $tanggapan = DB::table('tanggapan')
            ->join('petugas', 'petugas.id', '=', 'tanggapan.id_petugas')
            ->where('tanggapan.id_pengaduan', $id)
            ->get();

        //return $tanggapan;
        return view('detailpengaduanP', ['data' => $pengaduan]);
    }
}
//       //TANGGAPAN

//       function tanggapanpetugas(Request $request )
// {
//      //validasi
//     $request->validate([
//         'tanggapan' => 'required|min:2'
//     ]);
//     $tanggapan = $_POST['tanggapan'];
//     // $tanggapan = $request->tanggapan;

//     DB::table('tanggapan')->insert([
//         'id_pengaduan' => Auth::user()->id,
//         'tgl_tanggapan' => date('y-m-d'),
//         'tanggapan' => $tanggapan,
//         'id_petugas' => Auth::user()->id
//     ]);

//     // return redirect('/detail-pengaduan');
// }

//     function tampil_petugas(){
//         echo "Tampillll";
//       }

//     function petugas(){
//         $data = "Data Laporan";

//         return view('isipengaduan' , ['TextJudul' => $data]);
//     }
//     function tampilan(){
//         $tampilan = "Data Laporan";

//         return view('tampilan' , ['TextJudul' => $tampilan]);
//     }

// }

// function proses_petugas(Request $request ){
//     //validasi
//     $request->validate([
//         'nama_petugas' => 'required|min:2'
//     ]);

//     //$isipetugas = $_POST['nama_petugas'];
//     $isipetugas = $request->nama_petugas;

//     DB::table('petugas')->insert([
//         'id_petugas' => '2221',
//         'nama_petugas' => $isipengaduan,
//         'username' => 'nau',
//         'password' => 'nauu',
//         'telp' => '0866843236',
//         'level' => ''
//     ]);

//     return redirect('/tampilpengaduan');
// }
// function hapus($id){
//     echo "$id";
// }
//         function logout(){
//             Auth::guard("petugas")->logout();

//          return redirect('/petugas/login');
//         }
// }
