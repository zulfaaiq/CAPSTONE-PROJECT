<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RSUDKabBrebesController;
use App\Http\Controllers\RSUDKotaTegalController;


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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('rsud_kab_brebes/tampil', [RSUDKabBrebesController::class, 'tampilrsud_kab_brebes'])->name('tampilrsud_kab_brebes')->middleware('auth');
Route::get('rsud_kab_brebes/tambah', [RSUDKabBrebesController::class, 'tambahrsud_kab_brebes'])->name('tambahrsud_kab_brebes')->middleware('auth');
Route::post('rsud_kab_brebes/simpan', [RSUDKabBrebesController::class, 'simpanrsud_kab_brebes'])->name('simpanrsud_kab_brebes')->middleware('auth');

Route::get('rsud_kab_brebes/ubah/{id}', [RSUDKabBrebesController::class, 'ubahrsud_kab_brebes'])->name('ubahrsud_kab_brebes')->middleware('auth');
Route::post('rsud_kab_brebes/update', [RSUDKabBrebesController::class, 'updatersud_kab_brebes'])->name('updatersud_kab_brebes')->middleware('auth');

Route::get('rsud_kab_brebes/hapus/{id}', [RSUDKabBrebesController::class, 'hapusrsud_kab_brebes'])->name('hapusrsud_kab_brebes')->middleware('auth');

//RSUD Kota Tegal

Route::get('rsud_kota_tegal/tampil', [RSUDKotaTegalController::class, 'tampilrsud_kota_tegal'])->name('tampilrsud_kota_tegal')->middleware('auth');
Route::get('rsud_kota_tegal/tambah', [RSUDKotaTegalController::class, 'tambahrsud_kota_tegal'])->name('tambahrsud_kota_tegal')->middleware('auth');
Route::post('rsud_kota_tegal/simpan', [RSUDKotaTegalController::class, 'simpanrsud_kota_tegal'])->name('simpanrsud_kota_tegal')->middleware('auth');

Route::get('rsud_kota_tegal/ubah/{id}', [RSUDKotaTegalController::class, 'ubahrsud_kota_tegal'])->name('ubahrsud_kota_tegal')->middleware('auth');
Route::post('rsud_kota_tegal/update', [RSUDKotaTegalController::class, 'updatersud_kota_tegal'])->name('updatersud_kota_tegal')->middleware('auth');

Route::get('rsud_kota_tegal/hapus/{id}', [RSUDKotaTegalController::class, 'hapusrsud_kota_Tegal'])->name('hapusrsud_kota_tegal')->middleware('auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});
