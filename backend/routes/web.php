<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Support\Facades\Route;

Route::controller(CarController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/searchcar','searchcar')->name('search.car');
    Route::get('/about','about')->name('about.semsar');
    Route::get('/login','login')->name('login');
    Route::get('/carinfo/{carId}','carInfo')->name('car.info');
    Route::get('/semsarpage/{userId}','semsarPage')->name('semsar.page');
    
    Route::get('/get-models/{brandId}',function($brandId){
        $models = CarModel::where('brand_id',$brandId)
                 ->get(['id','modelName']);
        return response()->json($models);
    })->name('api.get-models');

    Route::get('/searchcar/brand/{brandId}',function($request,$brandId){
        $brands = Brand::all();
        $models = CarModel::where('brand_id',$brandId)->pluck('id');
        $cars = Car::whereIn('model_id',$models)->get();
        return view('searchcar',compact('cars','brands'));
    })->name('filter.by.brand');
});

Route::middleware(['auth'])->group(function(){
    Route::controller(CarController::class)->group(function(){
        Route::get('/addcar','addcar')->name('add.car');
        Route::post('/store/car','storecar')->name('store.car');
        Route::get('/edit/car/{carId}','editcarinfo')->name('edit.car.info');
        Route::post('/car/update',[CarController::class,'update'])->name('update.car');
    });
    
    Route::controller(UserController::class)->group(function(){
        Route::get('/edit/profile','editprofile')->name('edit.profile');
        Route::put('/update/profile','updateprofile')->name('update.profile');
        Route::get('/logout','logout')->name('logout');
    });
});

Route::prefix('admin')->middleware(['auth:admin','admin'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
    Route::get('/edit/article', [AdminController::class, 'editarticle'])->name('edit.article');
    Route::post('/admin/requests/{id}/accept',[AdminController::class,'acceptRequest'])->name('admin.requests.accept');
    Route::post('/admin/back/{id}',[AdminController::class,'backRequest'])->name('back.post');
    Route::post('/admin/delete/{id}',[AdminController::class,'deleteRequest'])->name('delete.poste');
    Route::delete('/admin/delete/user/{id}',[AdminController::class,'deleteUserAccount'])->name('delete.user.account');
    Route::post('/admin/store/modal',[AdminController::class,'storeModal'])->name('store.modal');
    Route::post('/admin/store/brand/model',[AdminController::class,'storeBrandModel'])->name('store.brand.model');
    Route::get('/admin/view/article',[AdminController::class,'viewArticle'])->name('view.article');
    Route::get('/admin/view/car/{id}', [AdminController::class, 'carinfo'])->name('car.info.admin');
});

Route::controller(UserController::class)->group(function(){
    Route::post('/register', 'register')->name('register');
    Route::post('/authentification', 'auth')->name('authentification');
});

Route::get('/update/profile', fn() => redirect()->route('index'));
Route::get('/authentification', fn() => redirect()->route('index'));
Route::get('/register', fn() => redirect()->route('index'));
Route::get('/find/car', fn() => redirect()->route('index'));