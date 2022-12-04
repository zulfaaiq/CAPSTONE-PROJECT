<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RSUDKabBrebesController;


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
