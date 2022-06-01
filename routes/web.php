<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelatihanController;
use Illuminate\Routing\RouteGroup;
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
    return view('home');
});

// Donasi

Route::resource('/donasi', donasiController::class);
Route::get('/riwayat', 'donasiController@riwayat');
Route::get('/donasi/berdonasi/{donasi}', 'donasiController@berdonasi');
Route::get('/register', 'LoginController@indexReg')->name('register')->middleware('guest');
Route::post('/register', 'LoginController@storeReg');
Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@loginpersonal');
Route::post('/loginorganizational', 'LoginController@loginorganizational');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::post('/berdonasi/{donasi}', 'donasiController@storePembayaran');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){

    Route::get('/dashboard', function(){return view('admin.dashboard');});
    Route::get('/pelatihan', [PelatihanController::class, 'daftar']);
    Route::get('/pelatihan/tambah', [PelatihanController::class, 'create']);
    Route::post('/pelatihan/tambah', [PelatihanController::class, 'store']);
});

// Route::get('/login', [LoginController::class, 'index']);


Route::get('/home', [HomeController::class, 'index'])->name('home');
