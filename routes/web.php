<?php

use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SifatSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
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
    return view('admin.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->group(function () {
        
        // Surat Masuk Admin
        Route::resource('/surat-masuk', SuratMasukController::class);
        // Route::get('surat-masuk/edit/{id}', SuratMasukController::class, 'edit');
        // Route::get('surat-masuk/detail/{id}', SuratMasukController::class, 'store');


        // Surat Keluar Admin
        Route::resource('/surat-keluar', SuratKeluarController::class);


        // Disposisi Admim
        Route::resource('/disposisi', DisposisiController::class);


        // Sifat Surat
        Route::resource('/sifat-surat', SifatSuratController::class);
    });
});
