<?php

use App\Http\Controllers\artikelController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('loginPage');
});


Route::get('/dashboard', [dashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/reservasi', [ReservasiController::class,'reservasi']);
Route::get('/reservasi/{id}/{status}', [ReservasiController::class,'updateReservasi']);


Route::get('/ulasan', [UlasanController::class, 'ulasan']);

Route::get('/layanan', [LayananController::class,'layanan']);
Route::get('/layanan/info', [LayananController::class, 'infoLayanan']);
Route::get('/layanan/deskripsi', [LayananController::class, 'descLayanan']);
Route::get('/layanan/additional', [LayananController::class, 'additional']);
Route::get('/layanan/review', [LayananController::class, 'review']);
Route::get('/layanan/qna', [LayananController::class, 'qna']);
Route::post('/layanan/add', [LayananController::class, 'addLayanan']);
Route::get('/layanan/delete/{id}', [LayananController::class, 'deleteLayanan']);
Route::get('/layanan/{id}', [LayananController::class, 'layanandetail']);
Route::post('/layanan/editLayanan/{id}', [LayananController::class, 'edit']);


Route::get('/artikel', [artikelController::class, 'artikel'])->name('artikel');
Route::get('/artikel/add', [artikelController::class, 'editArtikel']);
Route::get('/artikel/{id}', [artikelController::class, 'articledetail']);
Route::post('/artikel/addArtikel', [artikelController::class, 'addArtikel'])->name('addArtikel');
Route::post('/artikel/editArtikel/{id}', [artikelController::class, 'edit']);
Route::get('/artikel/delete/{id}', [artikelController::class, 'deleteArtikel'])->name('deleteArtikel');

Route::get('/', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/', [LoginController::class, 'getLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/layanan', function () {
//     return view('layanan.layanan');
// });
