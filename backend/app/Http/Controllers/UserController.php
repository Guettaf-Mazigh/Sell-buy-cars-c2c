<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
  public function register(Request $request){
    $request->validate([
      'email' => 'required|string|email|unique:users',
      'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|confirmed'
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ]);

    Auth::login($user);
    
    return redirect()->route('edit.profile')->with('success','Welcom !');
  }

  public function auth(Request $request){
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if(Auth::attempt($credentials)){
      $request->session()->regenerate(); 
      return redirect()->route('index')->with('success','Welcome!');
    }

    return redirect()->back()->with('error','User not found or wrong credentials');
  }

  public function editprofile(){
    $id = Auth::id();
    $infos = User::findOrFail($id);
    $cars = $infos->cars;
    return view('editprofile',compact('infos','cars'));
  }

  public function updateprofile(Request $request){
    $request->validate([
      'name' => 'required',
      'gender' => 'required|in:male,female',
      'wilaya' => 'required|integer|min:1|max:59',
      'phone' => 'required|regex:/^0[5-7][0-9]{8}$/',
      'address' => 'required',
      'password' => 'nullable|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|confirmed'
    ]);

    $id = Auth::id();
    $data = [
      'name' => $request->name,
      'gender' => $request->gender,
      'wilaya' => $request->wilaya,
      'phoneNumber' => $request->phone,
      'address' => $request->address
    ];
    if($request->filled('password')){
      $data['password'] = Hash::make($request->password);
    }
    User::where('id',$id)->update($data);

    return redirect()->route('index')->with('success','profile Updated successfully !');
  }
  
  public function logout(Request $request) : RedirectResponse{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}
}
