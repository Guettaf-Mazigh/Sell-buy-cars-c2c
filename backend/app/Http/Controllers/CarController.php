<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
   public function index(){
    $cars = Car::whereHas('carRequest',function($query){
        $query->where('state','accepted');
    })->orderBy('updated_at','desc')->get();
    $brands = Brand::all();
    return view('index',compact('cars','brands'));
}


    public function searchcar(Request $request){
        $cars = Car::query();
        $cars->whereHas('carRequest',function ($q){
            $q->where('state','accepted');
        });
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
        return view('searchcar', compact('cars','brands','models'));
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
        $brands = Brand::all();
        return view('addcar',compact('brands'));
    }


    public function storecar(Request $request){
        $request->validate([
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'model' => 'required|exists:car_models,id',
            'motor' => 'required|string|max:50',
            'energy' => 'required|string|max:50',
            'box' => 'required|string|max:50',
            'mileage' => 'required|integer|min:0',
            'color' => 'required|string|max:30',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'photos' => 'nullable|array|max:3',
            'photos.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        $car = Car::create([
            'year' => $request->year,
            'model_id' => $request->model,
            'motor' => $request->motor,
            'energy' => $request->energy,
            'box' => $request->box,
            'kilometrage' => $request->mileage,
            'Color' => $request->color,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::id()
        ]);
        CarRequest::create([
            'car_id' => $car->id,
            'state' => 'pending'
        ]);
        $folderPath = 'cars/' . $car->id;
        $fullPath = public_path($folderPath);
    
        if (!File::exists($fullPath)) {
            File::makeDirectory($fullPath, 0777, true);
        }
    
        $baseFileName = Str::random(20);
        $i = 1;
        foreach ($request->file('photos') as $photo) {
            if ($photo->isValid()) {
                if ($i > 3) break;
                $fileName = ($i === 1) ? $baseFileName . '.' . $photo->extension()
                            : $baseFileName . '.' . $i . '.' . $photo->extension();
                $photo->move($fullPath,$fileName);
                $i++;
            }
        }
        $car->update(['photo' => $baseFileName]);
        return redirect()->route('index')->with('success', 'Your car was added successfully!');
    }
}
