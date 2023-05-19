<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>''], function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class,'index'])->name('index');
    Route::get('/package', [\App\Http\Controllers\CustomerController::class,'package'])->name('package');
    Route::get('/destination', [\App\Http\Controllers\CustomerController::class,'destination'])->name('destination');
    Route::get('/package-detail', [\App\Http\Controllers\CustomerController::class,'packageDetail'])->name('packageDetail');
    Route::get('/destination-detail', [\App\Http\Controllers\CustomerController::class,'destinationDetail'])->name('destinationDetail');
    Route::get('/checkout', [\App\Http\Controllers\CustomerController::class,'checkout'])->name('checkout');
    Route::get('/login', [\App\Http\Controllers\CustomerController::class,'login'])->name('login');
    Route::get('/register', [\App\Http\Controllers\CustomerController::class,'register'])->name('register');
});
