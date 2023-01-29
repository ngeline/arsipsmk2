<?php

use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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
    // Route::post('/register', [LoginController::class, 'postregister'])->name('post.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/update-profil/{user}', [ProfileController::class, 'update'])->name('profil.update');

    // routing admin
    Route::middleware('checkrole:Admin')->prefix('/admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Profil Admim
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

        // Surat Masuk Admin
        Route::resource('/surat-masuk', SuratMasukController::class)->except(['update', 'destroy']);
        Route::put('/surat-masuk/{surat_masuk}', [SuratMasukController::class, 'update'])->name('surat-masuk.update');
        Route::get('/surat-masuk/{surat_masuk}/delete', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');

        // Surat Keluar Admin
        Route::resource('/surat-keluar', SuratKeluarController::class)->except(['update', 'destroy']);
        Route::put('/surat-keluar/{surat_keluar}', [SuratKeluarController::class, 'update'])->name('surat-keluar.update');
        Route::get('/surat-keluar/{surat_keluar}/delete', [SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy');

        // Disposisi Admim
        Route::resource('/disposisi', DisposisiController::class);

        // Sifat Surat
        Route::resource('/sifat-surat', SifatSuratController::class);

        // Sifat Surat
        Route::resource('/users', UserController::class);
    });

    // routing siswa
    Route::prefix('siswa')->group(function () {
        Route::get('/admin/dashboard', function () {
            return redirect()->route('siswa.dashboard');
        });
        Route::get('/dashboard', [DashboardController::class, 'indexsiswa'])->name('siswa.dashboard');
    });
});
