<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function index(){
        $cars = Car::all();
        dd($cars);
        return view('home', compact("cars"));
    }
}
