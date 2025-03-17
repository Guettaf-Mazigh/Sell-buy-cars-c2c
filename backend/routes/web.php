<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::controller(CarController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/searchcar','searchcar')->name('search.car');
    Route::get('/about','about')->name('about.semsar');
    Route::get('/login','login')->name('login');
});
