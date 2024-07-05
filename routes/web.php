<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdmin;

Route::group(['prefix' => 'admin'], function () {
    Route::resource('user', UserController::class);
});


// Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
//     Route::get('/', function () {
//         return view('user.index');
//     });
//     // untuk Route Backend Lainnya
// });

Route::get('/', function () {
    return view('layouts.backend');
})->middleware('auth');


Auth::routes(
    // ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');
Route::resource('kategori', App\Http\Controllers\KategoriController::class)->middleware('auth');
