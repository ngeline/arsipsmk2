<?php

use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
});

// Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Surat Masuk Admin
        Route::resource('/surat-masuk', SuratMasukController::class)->except(['update', 'destroy']);
        Route::post('/surat-masuk/{master_surat_masuk}', [SuratMasukController::class, 'update'])->name('surat-masuk.update');
        Route::get('/surat-masuk/{master_surat_masuk}/delete', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');


        // Surat Keluar Admin
        Route::resource('/surat-keluar', SuratKeluarController::class);


        // Disposisi Admim
        Route::resource('/disposisi', DisposisiController::class);


        // Sifat Surat
        Route::resource('/sifat-surat', SifatSuratController::class);


        // Sifat Surat
        Route::resource('/users', UserController::class);
    });
// });
