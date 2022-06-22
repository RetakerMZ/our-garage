<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;


class CarTypeController extends Controller
{
    public function index()
    {
        $car_type = CarType::all();
        return view('admin.car.tipe.index',compact('car_type'));
    }

    public function create()
    {
        $car_type = CarType::all();
        return view('admin.car.tipe.create',compact('car_type'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'tipe_mobil' => 'required|string',
            'gambar' => 'required|file|image',
        ]);

        $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();

        $image = $request->file('gambar')
            ->storeAs('public/images/tipe_mobils/', $fileName);

        $store = CarType::insert([
            'tipe_mobil' => $request->tipe_mobil,
            'gambar' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($store){

            return redirect()->route('car.tipe.index');
        }else{

            return redirect()->back();
        }
    }


}
