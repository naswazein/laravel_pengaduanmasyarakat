<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function login(){
        $login = "login";
        return view("/login" , ['login'=>$login]);
    }
    function proseslogin(Request $request){
    $datalogin = $request->only("username" , "password"); //buat ambil data
    if (Auth::attempt($datalogin)){ //proses login
        // return "berhasil";
       return redirect('/home');
    }else{
        // return "gagal";
        return redirect('/login')->with("error", "username atau password salah");

    }
    }
}