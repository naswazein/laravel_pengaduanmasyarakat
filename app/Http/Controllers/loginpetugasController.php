<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class loginpetugasController extends Controller
{
    public function index(){
        // return Hash::make ("123"); 
        return view('/loginpetugas');
    }
    public function login(Request $request){

         $data = $request->only('username' , 'password');
         if (Auth::guard("petugas")->attempt($data)){
         return redirect("/petugas/home");
         }else{
         return redirect("/petugas/login");
         }
    }
    public function home(){
        return "ini home";
    }
}