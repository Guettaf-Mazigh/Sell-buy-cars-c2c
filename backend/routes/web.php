<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(CarController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/searchcar','searchcar')->name('search.car');
    Route::get('/about','about')->name('about.semsar');
    Route::get('/login','login')->name('login');
    Route::get('/carinfo/{carId}','carInfo')->name('car.info');
    Route::get('/semsarpage/{userId}','semsarPage')->name('semsar.page');
});

Route::controller(UserController::class)->group(function(){
    Route::post('/register','register')->name('register');
    Route::get('/edit/profile','editprofile')->name('edit.profile');
    Route::put('/update/profile','updateprofile')->name('update.profile');
});