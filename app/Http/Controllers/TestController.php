<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    public function index()
    {
        //test get data user by api 
        if (Auth::guard('admin')->check()){
            $user = Auth::guard('admin')->user();
        }else if(Auth::guard('siswa')->check()){
            $user = Auth::guard('siswa')->user();
        }else{
            $user = Auth::user();
        }
        dd($user);
    }
}
