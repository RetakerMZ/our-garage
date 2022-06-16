<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return view('admin.car.index',compact('car'));
    }

    public function create()
    {
        $car = Car::all();
        return view('admin.car.create',compact('car'));
    }

}
