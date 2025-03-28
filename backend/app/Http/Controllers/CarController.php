<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        $brands = Brand::all();
        return view('index',compact('cars','brands'));
    }

    public function searchcar(){
        return view('searchcar');
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
}
