<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class petugascontroller extends Controller
{
    function index(){

    $judul = "Selamat Datang";
    $pengaduan = DB::table('petugas')->get();

    return view('home' , ['judul' => $judul,
    'petugas' => $petugas]);
    }
    function tampil_petugas(){
        echo "Tampillll";
      }
    
    function petugas(){
        $data = "Data Laporan";

        return view('isipengaduan' , ['TextJudul' => $data]);
    }
    function tampilan(){
        $tampilan = "Data Laporan";

        return view('tampilan' , ['TextJudul' => $tampilan]);
    }
    function tampilpetugas(){
        $judul = "Selamat Datang";
    $petugas = DB::table('petugas')->get();
 

    return view('tampilpetugas', ['judul' => $judul, 'petugas' => $petugas]);
    

    
}

    function proses_petugas(Request $request ){
        //validasi
        $request->validate([
            'nama_petugas' => 'required|min:2'
        ]);

        //$isipetugas = $_POST['nama_petugas'];
        $isipetugas = $request->nama_petugas;
    
        DB::table('petugas')->insert([
            'id_petugas' => '2221',
            'nama_petugas' => $isipengaduan,
            'username' => 'nau',
            'password' => 'nauu',
            'telp' => '0866843236',
            'level' => ''
        ]);

        return redirect('/tampilpengaduan');
    }
    function hapus($id){
        echo "$id";
    }
}