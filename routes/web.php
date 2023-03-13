<?php

use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CetakController;
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

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'postregister'])->name('postregister');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/update-profil/{user}', [ProfileController::class, 'update'])->name('profil.update');
    Route::post('/createPdf/{model}', [CetakController::class, 'createPdf'])->name('cetakpdf');

    // routing admin
    Route::middleware('checkrole:Admin')->prefix('/admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Profil Admin
        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');

        // Surat Masuk Admin
        Route::resource('/surat-masuk', SuratMasukController::class)->except(['update', 'destroy']);
        Route::put('/surat-masuk/{surat_masuk}', [SuratMasukController::class, 'update'])->name('surat-masuk.update');
        Route::get('/surat-masuk/{surat_masuk}/delete', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');

        // Surat Keluar Admin
        Route::resource('/surat-keluar', SuratKeluarController::class)->except(['update', 'destroy']);
        Route::put('/surat-keluar/{surat_keluar}', [SuratKeluarController::class, 'update'])->name('surat-keluar.update');
        Route::get('/surat-keluar/{surat_keluar}/delete', [SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy');

        // Disposisi Admin
        Route::resource('/disposisi', DisposisiController::class)->except(['destroy']);
        Route::get('/disposisi/{disposisi}/delete', [DisposisiController::class, 'destroy'])->name('disposisi.destroy');

        // Sifat Surat
        Route::resource('/users', UserController::class)->except(['destroy']);
        Route::get('/users/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    });

    // routing siswa
    Route::prefix('siswa')->name('siswa.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'indexsiswa'])->name('dashboard');

        // Profil Siswa
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

        // Surat Masuk Siswa
        Route::resource('/surat-masuk', SuratMasukController::class)->except(['update', 'destroy']);
        Route::put('/surat-masuk/{surat_masuk}', [SuratMasukController::class, 'update'])->name('surat-masuk.update');
        Route::get('/surat-masuk/{surat_masuk}/delete', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');

        // Surat Keluar Siswa
        Route::resource('/surat-keluar', SuratKeluarController::class)->except(['update', 'destroy']);
        Route::put('/surat-keluar/{surat_keluar}', [SuratKeluarController::class, 'update'])->name('surat-keluar.update');
        Route::get('/surat-keluar/{surat_keluar}/delete', [SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy');

        // Disposisi Siswa
        Route::resource('/disposisi', DisposisiController::class)->except(['destroy']);
        Route::get('/disposisi/{disposisi}/delete', [DisposisiController::class, 'destroy'])->name('disposisi.destroy');
    });
});
