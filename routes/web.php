<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RSUDKabBrebesController;
use App\Http\Controllers\RSUDKotaTegalController;
use App\Http\Controllers\RSBhaktiAsihController;
use App\Http\Controllers\RSUDKabTegalController;


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

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

//Home
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//RSUD Kabupaten Brebes
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

//RS Bhakti Asih Kabupaten Brebes
Route::get('rs_bhakti_asih/tampil', [RSBhaktiAsihController::class, 'tampilrs_bhakti_asih'])->name('tampilrs_bhakti_asih')->middleware('auth');
Route::get('rs_bhakti_asih/tambah', [RSBhaktiAsihController::class, 'tambahrs_bhakti_asih'])->name('tambahrs_bhakti_asih')->middleware('auth');
Route::post('rs_bhakti_asih/simpan', [RSBhaktiAsihController::class, 'simpanrs_bhakti_asih'])->name('simpanrs_bhakti_asih')->middleware('auth');

Route::get('rs_bhakti_asih/ubah/{id}', [RSBhaktiAsihController::class, 'ubahrs_bhakti_asih'])->name('ubahrs_bhakti_asih')->middleware('auth');
Route::post('rs_bhakti_asih/update', [RSBhaktiAsihController::class, 'updaters_bhakti_asih'])->name('updaters_bhakti_asih')->middleware('auth');

Route::get('rs_bhakti_asih/hapus/{id}', [RSBhaktiAsihController::class, 'hapusrs_bhakti_asih'])->name('hapusrs_bhakti_asih')->middleware('auth');

//RSUD Kabupaten Tegal
Route::get('rsud_kab_tegal/tampil', [RSUDKabTegalController::class, 'tampilrsud_kab_tegal'])->name('tampilrsud_kab_tegal')->middleware('auth');
Route::get('rsud_kab_tegal/tambah', [RSUDKabTegalController::class, 'tambahrsud_kab_tegal'])->name('tambahrsud_kab_tegal')->middleware('auth');
Route::post('rsud_kab_tegal/simpan', [RSUDKabTegalController::class, 'simpanrsud_kab_tegal'])->name('simpanrsud_kab_tegal')->middleware('auth');

Route::get('rsud_kab_tegal/ubah/{id}', [RSUDKabTegalController::class, 'ubahrsud_kab_tegal'])->name('ubahrsud_kab_tegal')->middleware('auth');
Route::post('rsud_kab_tegal/update', [RSUDKabTegalController::class, 'updatersud_kab_tegal'])->name('updatersud_kab_tegal')->middleware('auth');

Route::get('rsud_kab_tegal/hapus/{id}', [RSUDKabTegalController::class, 'hapusrsud_kab_tegal'])->name('hapusrsud_kab_tegal')->middleware('auth');

//Register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('umum_home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});


Route::get('umum_tampilrsud_kab_brebes', [RSUDKabBrebesController::class, 'umum_tampilrsud_kab_brebes'])->name('tampilrsud_kab_brebes')->middleware('guest');
Route::get('umum_tampilrsud_kota_tegal', [RSUDKotaTegalController::class, 'umum_tampilrsud_kota_tegal'])->name('tampilrsud_kota_tegal')->middleware('guest');
Route::get('umum_tampilrs_bhakti_asih', [RSBhaktiAsihController::class, 'umum_tampilrs_bhakti_asih'])->name('tampilrs_bhakti_asih')->middleware('guest');
Route::get('umum_tampilrsud_kab_tegal', [RSUDKabTegalController::class, 'umum_tampilrsud_kab_tegal'])->name('tampilrsud_kab_tegal')->middleware('guest');