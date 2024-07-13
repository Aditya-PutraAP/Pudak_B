<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::middleware('guest')->group(function () {
    Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [UserController::class, 'register']);

    Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('login', [UserController::class, 'login']);
});

Route::middleware('auth')->post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news', [NewsController::class, 'store'])->name('news.store');
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
