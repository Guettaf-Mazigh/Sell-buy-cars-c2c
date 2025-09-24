<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindashboard(){
        $users = User::all();
        $carCount = Car::count();
        $semsarCount = User::count();
        $cars = Car::all();
        $pendingCars = CarRequest::where('state','pending')->get();
        $rejectedCars = CarRequest::where('state','rejected')->get();
        $acceptedCars = CarRequest::where('state','accepted')->get();
        $brands = Brand::all();
        $posts = Post::count();
        return view('admin.dashboard',compact(
            'users', 'carCount', 'semsarCount', 'cars', 'pendingCars','rejectedCars','acceptedCars','brands','posts'
        ));
    }


    public function editarticle(){
        return view('admin.aditarticle');
    }

    public function acceptRequest($id){
        $request = CarRequest::findOrFail($id);
        $request->state = 'accepted';
        $request->save();
        return redirect()->back();
    }

    public function rejectRequest($id){
        $request = CarRequest::findOrFail($id);
        $request->state = 'rejected';
        $request->save();
        return redirect()->back();
    }

    public function backRequest($id){
        $request = CarRequest::findOrFail($id);
        $request->state = 'accepted';
        $request->save();
        return redirect()->back();
    }

    public function deleteRequest($id){
        $request = CarRequest::findOrFail($id);
        $request->state = 'rejected';
        $request->save();
        return redirect()->back();
    }

    public function deleteUserAccount($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success','Utilisateur supprimé avec succès.');
    }

   public function storeModal(Request $request){
        $request->validate([
            'model' => 'required|string|max:255'
        ]);

        $existingModel = CarModel::where('modelName',$request->model)
            ->where('brand_id', $request->brand)->first();

        if($existingModel){
            return redirect()->back()->with('modelerror','This model already exists for the selected brand.');
        }

        $newModel = new CarModel();
        $newModel->brand_id = $request->brand;
        $newModel->modelName = $request->model;
        $newModel->save();

        return redirect()->back()->with('modelsuccess','Model added successfully.');
    }

    public function storeBrandModel(Request $request){
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255'
        ]);
        $existingBrand = Brand::where('brandName',$request->brand)->first();
        $existingModel = CarModel::where('modelName',$request->model)->first();
        if($existingBrand || $existingModel){
            return redirect()->back()->with('branderror','This model exists yet');
        }
        $newBrand = new Brand();
        $newBrand->brandName = $request->brand;
        $newBrand->save();
        $newModel = new CarModel();
        $newModel->brand_id = $newBrand->id;
        $newModel->modelName = $request->model;
        $newModel->save();

        return redirect()->back()->with('brandsuccess','Brand&Model added successfully');
    }

    public function viewArticle(){
        return view('admin.articleviewuser');
    } 

   public function carinfo($id) {
        $car = Car::findOrFail($id);
        return view('admin.carinfoadmin',compact('car'));
    }
}