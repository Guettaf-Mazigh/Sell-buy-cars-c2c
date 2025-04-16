<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Models\CarModel;
use Illuminate\Support\Facades\Route;

Route::controller(CarController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/searchcar','searchcar')->name('search.car');
    Route::get('/about','about')->name('about.semsar');
    Route::get('/login','login')->name('login');
    Route::get('/carinfo/{carId}','carInfo')->name('car.info');
    Route::get('/semsarpage/{userId}','semsarPage')->name('semsar.page');
    Route::get('/addcar','addcar')->name('add.car')->middleware('auth');
});

Route::controller(UserController::class)->group(function(){
    Route::post('/register','register')->name('register');
    Route::post('/authentification','auth')->name('auth');
    Route::get('/edit/profile','editprofile')->name('edit.profile')->middleware('auth');
    Route::put('/update/profile','updateprofile')->name('update.profile')->middleware('auth');
    Route::get('/logout','logout')->name('logout');
});

Route::get('/update/profile', function () {
    return redirect()->route('index');
});
Route::get('/authentification', function () {
    return redirect()->route('index');
});
Route::get('/register', function () {
    return redirect()->route('index');
});
Route::get('/find/car', function () {
    return redirect()->route('index');
});
