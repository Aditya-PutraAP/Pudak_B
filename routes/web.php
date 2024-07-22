<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebudayaanController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\FotografiController;
use App\Models\Kebudayaan;

// Route::get('/', function () {
//     return view('frontend.home');
// });


// Route::get('/about', function () {
//     return view('frontend.about');
// })->name('about');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [UserController::class, 'register']);

    Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('login', [UserController::class, 'login']);
    Route::get('imagePage', [FotografiController::class, 'index'])->name('fotografi.index');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');

    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('news', [NewsController::class, 'store'])->name('news.store');
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');
    Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('produk/{produk}', [ProdukController::class, 'show'])->name('produk.show');
    Route::get('produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    Route::get('kebudayaan/create', [KebudayaanController::class, 'create'])->name('kebudayaan.create');
    Route::post('kebudayaan', [KebudayaanController::class, 'store'])->name('kebudayaan.store');
    Route::get('kebudayaan', [KebudayaanController::class, 'index'])->name('kebudayaan.index');
    Route::get('kebudayaan/{kebudayaan}', [KebudayaanController::class, 'show'])->name('kebudayaan.show');
    Route::get('kebudayaan/{kebudayaan}/edit', [KebudayaanController::class, 'edit'])->name('kebudayaan.edit');
    Route::put('kebudayaan/{kebudayaan}', [KebudayaanController::class, 'update'])->name('kebudayaan.update');
    Route::delete('kebudayaan/{kebudayaan}', [KebudayaanController::class, 'destroy'])->name('kebudayaan.destroy');

    Route::get('gambar/create', [GambarController::class, 'create'])->name('gambar.create');
    Route::post('gambar', [GambarController::class, 'store'])->name('gambar.store');
    Route::get('gambar', [GambarController::class, 'index'])->name('gambar.index');
    Route::get('gambar/{gambar}', [GambarController::class, 'show'])->name('gambar.show');
    Route::get('gambar/{gambar}/edit', [GambarController::class, 'edit'])->name('gambar.edit');
    Route::put('gambar/{gambar}', [GambarController::class, 'update'])->name('gambar.update');
    Route::delete('gambar/{gambar}', [GambarController::class, 'destroy'])->name('gambar.destroy');
});

// Route::middleware('auth')->post('logout', [UserController::class, 'logout'])->name('logout');

// Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
// Route::post('news', [NewsController::class, 'store'])->name('news.store');
// Route::get('news', [NewsController::class, 'index'])->name('news.index');
// Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');
// Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
// Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
// Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

// Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
// Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');
// Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
// Route::get('produk/{produk}', [ProdukController::class, 'show'])->name('produk.show');
// Route::get('produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
// Route::put('produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
// Route::delete('produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// Route::get('kebudayaan/create', [KebudayaanController::class, 'create'])->name('kebudayaan.create');
// Route::post('kebudayaan', [KebudayaanController::class, 'store'])->name('kebudayaan.store');
// Route::get('kebudayaan', [KebudayaanController::class, 'index'])->name('kebudayaan.index');
// Route::get('kebudayaan/{kebudayaan}', [KebudayaanController::class, 'show'])->name('kebudayaan.show');
// Route::get('kebudayaan/{kebudayaan}/edit', [KebudayaanController::class, 'edit'])->name('kebudayaan.edit');
// Route::put('kebudayaan/{kebudayaan}', [KebudayaanController::class, 'update'])->name('kebudayaan.update');
// Route::delete('kebudayaan/{kebudayaan}', [KebudayaanController::class, 'destroy'])->name('kebudayaan.destroy');

// Route::get('gambar/create', [GambarController::class, 'create'])->name('gambar.create');
// Route::post('gambar', [GambarController::class, 'store'])->name('gambar.store');
// Route::get('gambar', [GambarController::class, 'index'])->name('gambar.index');
// Route::get('gambar/{gambar}', [GambarController::class, 'show'])->name('gambar.show');
// Route::get('gambar/{gambar}/edit', [GambarController::class, 'edit'])->name('gambar.edit');
// Route::put('gambar/{gambar}', [GambarController::class, 'update'])->name('gambar.update');
// Route::delete('gambar/{gambar}', [GambarController::class, 'destroy'])->name('gambar.destroy');
