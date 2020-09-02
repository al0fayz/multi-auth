<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index(){
        //this for test get data user by session 
        if (Auth::guard('admin')->check()){
            dd('guard admin', Auth::guard('admin')->user());
        }else if(Auth::guard('siswa')->check()){
            dd('guard siswa', Auth::guard('siswa')->user());
        }else{
            dd('normal', Auth::user());
        }
    }
}
