<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('index');
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
}
