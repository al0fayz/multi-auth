<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//login
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/siswa', 'Auth\LoginController@showSiswaLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/siswa', 'Auth\LoginController@siswaLogin');

//register
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/siswa', 'Auth\RegisterController@showSiswaRegisterForm');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/siswa', 'Auth\RegisterController@createSiswa');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/siswa', 'siswa');
Route::view('/test_api', 'test');

Route::get('/test', 'WebController@index');

