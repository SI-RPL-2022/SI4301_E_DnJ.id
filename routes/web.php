<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\UserController;
use App\Models\Pelatihan;
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

//User
Route::get('/profil', [UserController::class, 'index']);
Route::get('/profil/update', [UserController::class, 'edit']);
Route::put('/profil/update/{id}', [UserController::class, 'update']);
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

//Pelatihan User

Route::get('/pelatihan', [PelatihanController::class, 'index']);
Route::get('/pelatihan/detail/{id}', [PelatihanController::class, 'show']);

//Pekerjaan User
Route::get('/pekerjaan', [PekerjaanController::class, 'index']);
Route::get('/pekerjaan/detail/{id}', [PekerjaanController::class, 'show']);



Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){

    Route::get('/dashboard', function(){return view('admin.dashboard');});

    // Pelatihan
    Route::get('/pelatihan', [PelatihanController::class, 'daftar']);
    Route::get('/pelatihan/tambah', [PelatihanController::class, 'create']);
    Route::post('/pelatihan/tambah', [PelatihanController::class, 'store']);
    Route::get('/pelatihan/edit/{id}', [PelatihanController::class, 'edit']);
    Route::put('/pelatihan/edit/{id}', [PelatihanController::class, 'update']);
    Route::delete('/pelatihan/delete/{id}', [PelatihanController::class, 'destroy']);

    // Pekerjaan
    Route::get('/pekerjaan', [PekerjaanController::class, 'daftar']);
    Route::get('/pekerjaan/tambah', [PekerjaanController::class, 'create']);
    Route::post('/pekerjaan/tambah', [PekerjaanController::class, 'store']);
    Route::get('/pekerjaan/edit/{id}', [PekerjaanController::class, 'edit']);
    Route::put('/pekerjaan/edit/{id}', [PekerjaanController::class, 'update']);
    Route::delete('/pekerjaan/delete/{id}', [PekerjaanController::class, 'destroy']);

});

// Route::get('/login', [LoginController::class, 'index']);


Route::get('/home', [HomeController::class, 'index'])->name('home');
