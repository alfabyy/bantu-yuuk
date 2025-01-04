<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Dashboard, hanya dapat diakses oleh pengguna yang sudah login dan terverifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Middleware untuk Penyedia (admin)
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:admin-access')->group(function () {
            Route::get('/dashboard', [PenyediaController::class, 'index'])->name('dashboard'); // Admin Dashboard
            Route::post('/', [PenyediaController::class, 'store'])->name('store');
            Route::put('/{id}', [PenyediaController::class, 'update'])->name('update');
            Route::delete('/{id}', [PenyediaController::class, 'destroy'])->name('destroy');
            
            Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
            Route::post('/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');
            Route::put('/pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
            Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');
            
            Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
            Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.store');
            Route::put('/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');
            Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');
        });
    });

    // Middleware untuk Pengguna biasa
    Route::prefix('user')->name('user.')->group(function () {
        Route::middleware('can:user-access')->group(function () {
            Route::get('/index', [UserController::class, 'index'])->name('index'); // User Dashboard
            // Anda bisa menambahkan lebih banyak rute pengguna biasa di sini
        });
    });
});

// Rute Profile
Route::middleware('auth')->group(function () {
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__ . '/auth.php';
