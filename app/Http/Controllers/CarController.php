<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        $car = Car::paginate(5);
        return view('admin.car.car.index',compact('car'));
    }

    public function create()
    {
        $car_type = CarType::all();
        return view('admin.car.car.create',compact('car_type'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'fuel'=> 'required|string',
            'seat'=> 'required|string',
            'harga'=> 'required|numeric',
            'transmition' => 'required|string',
            'gambar' => 'required|file|image',
        ]);

        $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();

        $image = $request->file('gambar')
            ->storeAs('public/images/cars/', $fileName);

        $store = Car::insert([
            'tipe_mobil' => $request->tipe_mobil,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'fuel' => $request->fuel,
            'seat' => $request->seat,
            'transmition' => $request->transmition,
            'gambar' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($store){

            return redirect()->route('car.index');
        }else{

            return redirect()->back();
        }
    }

}
