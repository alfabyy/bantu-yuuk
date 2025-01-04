<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Routes for Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for Penyedia 
    Route::resource('penyedia', PenyediaController::class);
    Route::get('/penyedia', [PenyediaController::class, 'index'])->name('penyedia.index');
    Route::post('/penyedia', [PenyediaController::class, 'store'])->name('penyedia.store');
    Route::put('/penyedia/{id}', [PenyediaController::class, 'update'])->name('penyedia.update');
    Route::delete('/penyedia/{id}', [PenyediaController::class, 'destroy'])->name('penyedia.destroy');

    // Routes for Pengguna
    Route::resource('pengguna', PenggunaController::class);
    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
    Route::post('/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');
    Route::put('/pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
    Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');

    // Routes for Layanan
    Route::resource('layanan', LayananController::class);
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.store');
    Route::put('/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');

});

require __DIR__.'/auth.php';
