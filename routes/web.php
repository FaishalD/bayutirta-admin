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


Route::get('/ulasan', [UlasanController::class, 'ulasan']);

Route::get('/layanan', [LayananController::class,'layanan']);
Route::get('/layanan/edit', [LayananController::class, 'editLayanan']);

Route::get('/artikel', [artikelController::class, 'artikel'])->name('artikel');
Route::get('/artikel/edit', [artikelController::class, 'editArtikel']);
Route::post('/artikel/addArtikel', [artikelController::class, 'addArtikel'])->name('addArtikel');
Route::get('/artikel/delete/{id}', [artikelController::class, 'deleteArtikel'])->name('deleteArtikel');

Route::get('/', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/', [LoginController::class, 'getLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/layanan', function () {
//     return view('layanan.layanan');
// });
