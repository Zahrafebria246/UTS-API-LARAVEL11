<?php

use Illuminate\Support\Facades\Route;


//previx(v1)menmbahkan kata khusus untuk url//

Route::prefix('v1')->group( function () {

    Route::post('auth/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
    //Route untuk Login user
    Route::post('auth/login', \App\Http\Controllers\Api\Auth\LoginController::class);
    // Route untuk mendapatkan semua produk
    //Route untuk home
    Route::get('/home', [App\Http\Controllers\Api\HomeController::class, 'index']);
    //Route untuk register user

    // fungsi midwere jika didalam midware tidak pakai tokon jika di luar memakai token
    // Route yang hanya bisa diakses dengan token
    Route::middleware('auth:sanctum')->group(function () {
        //Route untuk Logout user
        Route::post('auth/logout', \App\Http\Controllers\Api\Auth\LogoutController::class);

        Route::resource('categorie', \App\Http\Controllers\Api\CategorieController::class)->except(['edit']);
        Route::resource('product', \App\Http\Controllers\Api\ProductController::class)->except(['edit']);
    });


});

