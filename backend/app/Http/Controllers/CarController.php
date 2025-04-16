<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        $brands = Brand::all();
        return view('index',compact('cars','brands'));
    }

    public function searchcar(Request $request){
        $cars = Car::query();
        if($request->filled('brand')){
            $cars->whereHas('model.brand',function ($q) use ($request){
                $q->where('id', $request->brand);
            });
        }
    
        if($request->filled('model')){
            $model = CarModel::where('modelName',$request->model)->first();
            if($model){
                $cars->where('model_id',$model->id);
            }
        }

        if($request->filled('year')){
            $cars->where('year',$request->year);
        }

        if($request->filled('wilaya')){
            $cars->whereHas('user',function ($q) use ($request){
                $q->where('wilaya', $request->wilaya);
            });
        }
    
        $cars = $cars->get();
        $brands = Brand::all();
        $models = CarModel::all();
        return view('searchcar', compact('cars', 'brands', 'models'));
    }

    public function about(){
        return view('about');
    }

    public function login(){
        return view('login_reg');
    }

    public function carInfo($carId){
        $car = Car::findOrFail($carId);
        return view('carinfo',compact('car'));
    }

    public function semsarPage($userId){
        $semsarInfos = User::findOrFail($userId);
        $semsarCars = Car::where('user_id',$userId)->get();
        return view('semsarpage',compact('semsarInfos','semsarCars'));
    }

    public function addcar(){
        return view('addcar');
    }
}
