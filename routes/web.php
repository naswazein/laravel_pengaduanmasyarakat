<?php

use App\Http\Controllers\masyarakatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanControll;
use App\http\Controllers\pengaduanController;
use App\http\Controllers\petugascontroller;
use App\http\Controllers\AuthControll;
use App\http\Controllers\loginController;
use App\http\Controllers\loginpetugasController;


Route::get('/tampilpengaduan', [pengaduanController::class, 'tampilpengaduan']);
 Route::post('/isipengaduan', [pengaduanController::class, 'proses_pengaduan']); 
 Route::get('/hapus-pengaduan/{id}', [pengaduanController::class, 'hapus']); 
 Route::get('/detail-pengaduan/{id}', [pengaduanController::class, 'detailpengaduan']); 
 Route::post('/update/{id}', [pengaduanController::class, 'proses_update_pengaduan']); 
 Route::get('/update/{id}', [pengaduanController::class, 'update_pengaduan']); 


Route::post('/isimasyarakat', [pengaduanController::class, 'proses_masyarakat']); 
Route::get('/tampilmasyarakat', [pengaduanController::class, 'tampilmasyarakat']); 

Route::post('/isipetugas', [petugasController::class, 'proses_petugas']); 
Route::get('/tampilpetugas', [petugasController::class, 'tampilpetugas']); 
Route::get('/hapus-petugas/{id}', [petugasController::class, 'hapus']); 

Route::get('/about/{id}', [pengaduanController::class, 'tampilabout']); 

Route::get('/detailpengaduan/{id}', [pengaduanController::class, 'detailpengaduan']); 

Route::get('/detailpengaduan/{id}', [pengaduanController::class, 'detailpengaduan']); 

//register
Route::get('/register', [AuthControll::class, 'register']); 
Route::post('/register', [AuthControll::class, 'store']); 

//login masyarakat
Route::get('/login', [loginController::class, 'login']); 
Route::post('/login', [loginController::class, 'proseslogin']);

// login petugas
Route::get('/petugas/login', [loginpetugasController::class, 'index']); 
Route::post('/petugas/login', [loginpetugasController::class, 'login']);

Route::middleware(['cekpetugas'])->group(function(){
//login petugas
Route::get('/petugas/home', [petugasController::class, 'home']);
//logout
Route::get('/petugas/logout', [loginpetugasController::class, 'logout']); 
});

//logout masyrakat
Route::get('/logout', [loginpetugasController::class, 'logout']); 

//logout
Route::get('/petugas/logout', [petugascontroller::class, 'logout']); 


Route::get('/',    function () {
    return view('welcome');
});

Route::get('/home', [pengaduanController::class, 'index']);


Route::get('masyarakat', [masyarakatController::class, 'masyarakat']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/isipengaduan', function () {
    return view('isipengaduan');
});

Route::get('/isimasyarakat', function () {
    return view('isimasyarakat');
});

Route::get('/isipetugas', function () {
    return view('isipetugas');
});

Route::get('/about', function() {
    echo "ini halaman about";
});





