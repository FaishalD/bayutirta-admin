<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages;
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

Route::get('/dashboard', [pages::class, 'dashboard']);
Route::get('/layanan', [pages::class,'layanan']);

Route::get('/', [loginController::class, 'login']);
Route::post('/', [loginController::class, 'auth']);


// Route::get('/layanan', function () {
//     return view('layanan.layanan');
// });
