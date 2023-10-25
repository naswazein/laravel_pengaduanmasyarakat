<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masyarakatController extends Controller
{
    function masyarakat(){

        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat', ['masyarakat' => $masyarakat]);

    }

}
// {
//         function index(){

//             $judul = "Selamat Datang";
//             $masyarakat = DB::table('masyarakat')->get();
        
//             return view('home' , ['judul' => $judul,
//             'masyarakat' => $masyarakat]);
//         }
//         function tampil_masyarakat(){
//             echo "Tampillll";
// }
//         function pengaduan(){
//               $data = "Data Laporan";

//           return view('isimasyarakat' , ['TextJudul' => $data]);
//         }
//         function tampilan(){
//             $tampilan = "Data Laporan";
    
//             return view('tampilan' , ['TextJudul' => $tampilan]);
//         }
//         function tampilmasyarakat(){
//             $judul = "Selamat Datang";
//         $masyarakat= DB::table('masyarakat')->get();
     
    
//         return view('tampilmasyarakat', ['judul' => $judul, 'masyarakat' => $masyarakat]);
//          }
//          function proses_masyarakat(Request $request ){
//             //validasi
//             $request->validate([
//                 'isilaporan' => 'required|min:2'
//             ]);
    
//             //$isimasyarakat = $_POST['isilaporan'];
//             $isimasyarakat = $request->isilaporan;
        
//             DB::table('masyarakat')->insert([
//                 'tgl_pengaduan' => date('y-m-d'),
//                 'nik' => '01',
//                 'isi_laporan' => $isimasyarakat,
//                 'foto' => '',
//                 'status' => '0'
//             ]);
    
//             return redirect('/tampilmasyarakat');
//         }
//     }
        