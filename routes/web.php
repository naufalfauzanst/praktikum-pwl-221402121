<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Mengkoneksikan route dengan controller
// Route::get('daftar_mahasiswa', [MahasiswaController::class,
// 'index']);

Route::post('/detail_mahasiswa', [MahasiswaController::class,
'detail_mhs']);

Route::get('/detail_mahasiswa/daftar_kekayaan',
[MahasiswaController::class, 'daftar_kekayaaan'])->name('one');

Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');

// Route::match(['get', 'post'], '/detail_mahasiswa',
// [MahasiswaController::class, 'detail_mhs']);

use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function (){
    Route::get('/admin/dashboard', 'index');
    Route::get('/admin/arsip', 'show_arsip');
    Route::get('/admin/postingan', 'show_postingan');
    Route::get('/admin/facebook', 'show_facebook');
    Route::get('/admin/instagram', 'show_instagram');
    Route::get('/admin/twitter', 'show_twitter');
    Route::get('/admin/linkedin', 'show_linkedin');
    Route::get('/admin/github', 'show_github');
});