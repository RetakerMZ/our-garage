<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return view('admin.car.car.index',compact('car'));
    }

    public function category()
    {
        $cartype = CarType::all();
        return view('admin.car.category.category',compact('cartype'));
    }

    public function create()
    {
        $car = Car::all();
        return view('admin.car.car.create',compact('car'));
    }

}
