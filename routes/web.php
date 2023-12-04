<?php

use App\Http\Controllers\artikelController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::get('/dashboard', [dashboardController::class, 'dashboard']);
Route::get('/layanan', [dashboardController::class,'layanan']);

Route::get('/artikel', [artikelController::class, 'artikel']);
Route::get('/artikel/edit', [artikelController::class, 'editArtikel']);

Route::get('/', [loginController::class, 'login']);
Route::post('/', [loginController::class, 'auth']);


// Route::get('/layanan', function () {
//     return view('layanan.layanan');
// });
