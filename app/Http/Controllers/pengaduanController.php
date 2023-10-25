<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pengaduan;


class pengaduanController extends Controller
{

    function index(){

    $judul = "Selamat Datang";
    $pengaduan = DB::table('pengaduan')->get();

    return view('home' , ['judul' => $judul, 'pengaduan' => $pengaduan]);
    }

    function tampil_pengaduan(){
        echo "Tampillll";
      }
    
    function pengaduan(){
        $data = "Data Laporan";

        return view('isipengaduan' , ['TextJudul' => $data]);
    }
    function tampilan(){
        $tampilan = "Data Laporan";

        return view('tampilan' , ['TextJudul' => $tampilan]);
    }
    function tampilpengaduan(){
        $judul = "";
    $pengaduan = DB::table('pengaduan')->get();
 

    return view('tampilpengaduan', ['judul' => $judul, 'pengaduan' => $pengaduan]);
    

    
}

    function proses_pengaduan(Request $request )
    {
         //validasi
         $nama_foto = $request->foto->getClientOriginalName();

        $request->validate([
            'isilaporan' => 'required|min:2'
        ]);

        $request->foto->storeAs('public/image' , $nama_foto);

        //$isipengaduan = $_POST['isilaporan'];
        $isipengaduan = $request->isilaporan;
    
        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('y-m-d'),
            'nik' => '01',
            'isi_laporan' => $isipengaduan,
            'foto' => $request->foto->getClientOriginalName(), 
            'status' => '0'
        ]);

        return redirect('/tampilpengaduan');
    }

    function hapus($id){
        $deleted=DB::table('pengaduan')->where('id_pengaduan', $id)->delete();
        if($deleted){
           return redirect()->back();
        }
        
    }
        function detail($id){
            echo $id;
        }
        function detailpengaduan($id){
            $pengaduan = DB::table('pengaduan')
                        ->where('id_pengaduan', $id)
                        ->first();
            return view("detail-pengaduan", ["pengaduan" => $pengaduan]);
        
          }
        //   function update_pengaduan($id){
        //     echo $id;
        //   }
        //   $affected = DB::table('pengaduan')
        //       ->where('id_pengaduan', $id)
        //       ->update(['isi_laporan' => "isi laporan di update"]);
        function update_pengaduan($id)
        {
            $pengaduan = DB::table('pengaduan')->where('id_pengaduan' , $id)->first();
            return view('update' , ['pengaduan' => $pengaduan]);
        }
        
        function proses_update_pengaduan(Request $request, $id){

            // return;+
            $isi_laporan = $request->isi_laporan;

            DB::table('pengaduan')
            ->where('id_pengaduan' , $id)
            ->update(['isi_laporan' => $isi_laporan]);

        return redirect('/tampilpengaduan');
        }
    }
        
    
    









