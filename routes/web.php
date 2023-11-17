<?php

use App\Http\Controllers\masyarakatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanControll;
use App\http\Controllers\pengaduanController;
use App\http\Controllers\petugascontroller;
use App\http\Controllers\AuthControll;
use App\http\Controllers\loginController;
use App\http\Controllers\loginpetugasController;

Route::middleware(['auth'])->group(function () {
    //tampil pengaduan
    Route::get('/tampilpengaduan', [pengaduanController::class, 'tampilpengaduan']);
    //isipengaduan
    Route::get('/isipengaduan', function () {
        return view('isipengaduan');
    });
    Route::post('/isipengaduan', [pengaduanController::class, 'proses_pengaduan']);
    //home
    Route::get('/home', [pengaduanController::class, 'index']);
});

//login masyarakat
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'proseslogin']);

//hapus pengaduan
Route::get('/hapus-pengaduan/{id}', [pengaduanController::class, 'hapus']);

//detail pengaduan
Route::get('/detail-pengaduan/{id}', [pengaduanController::class, 'detailpengaduan']);
Route::get('/detailpengaduan/{id}', [pengaduanController::class, 'detailpengaduan']);

//update
Route::post('/update/{id}', [pengaduanController::class, 'proses_update_pengaduan']);
Route::get('/update/{id}', [pengaduanController::class, 'update_pengaduan']);

//isi masyarakat
Route::post('/isimasyarakat', [pengaduanController::class, 'proses_masyarakat']);

//tampil masyarakat
Route::get('/tampilmasyarakat', [pengaduanController::class, 'tampilmasyarakat']);

//register
Route::get('/register', [AuthControll::class, 'register']);
Route::post('/register', [AuthControll::class, 'store']);

//logout masyrakat
Route::get('/logout', [loginController::class, 'logout']);

//logout
Route::get('/petugas/logout', [petugascontroller::class, 'logout']);

//PETUGAS

//DETAIL PENGADUAN P
Route::get('/petugas/detailpengaduanP/{id}', [petugascontroller::class, 'detailpengaduanP']);
Route::post('/petugas/detail_pengaduan/{id}', [petugascontroller::class, 'detailpengaduanP']);

//hapus petugas
Route::get('/hapus-petugas/{id}', [petugascontroller::class, 'hapus']);

//detail petugas
// Route::get('/detail_petugas/{id}', [petugascontroller::class, 'detailpetugas']);
// Route::get('/detailpetugas/{id}', [petugascontroller::class, 'detailpetugas']);

//tanggapan petugas
Route::post('petugas/tanggapan', [petugascontroller::class, 'insertTanggapan'])->name('insertTanggapanPetugas');
Route::get('petugas/tanggapan', [petugascontroller::class, 'tanggapan']);

//update petugas
Route::post('/petugas/update/{id}', [petugascontroller::class, 'proses_update_petugas']);
Route::get('/petugas/update/{id}', [petugascontroller::class, 'update_petugas']);

//select petugas
Route::get('/select/{id}', [petugascontroller::class, 'select']);

//Home petugas
Route::get('petugas/home', [petugascontroller::class, 'index']);
//tampil petugas
Route::get('/tampilpetugas', [petugascontroller::class, 'tampilpetugas']);
// login petugas
Route::get('/petugas/login', [loginpetugasController::class, 'index']);
Route::post('/petugas/login', [loginpetugasController::class, 'login']);

Route::middleware(['cekpetugas'])->group(function () {
    //login petugas
    // Route::get('/petugas/home', [petugasController::class, 'home']);
    //logout
    Route::get('/petugas/logout', [loginpetugasController::class, 'logout']);
});

// petugas yang ada di home masyarakat
Route::post('/isipetugas', [petugasController::class, 'proses_petugas']);
Route::get('/isipetugas', function () {
    return view('isipetugas');
});
Route::get('petugas/tampilpetugas', [petugasController::class, 'tampilpetugas']);
Route::get('/hapus-petugas/{id}', [petugasController::class, 'hapus']);
Route::get('/about/{id}', [pengaduanController::class, 'tampilabout']);

Route::get('petugas/tampilpengaduan', [petugasController::class, 'tampilpengaduan']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('masyarakat', [masyarakatController::class, 'masyarakat']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/isimasyarakat', function () {
    return view('isimasyarakat');
});

Route::get('/about', function () {
    echo 'ini halaman about';
});
