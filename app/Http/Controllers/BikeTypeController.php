<?php

namespace App\Http\Controllers;

use App\Models\BikeType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BikeTypeController extends Controller
{
    public function index()
    {
        $bike_type = BikeType::all();
        return view('admin.bike_type.index',compact('bike_type'));
    }

    public function create()
    {
        $bike_type = BikeType::all();
        return view('admin.bike_type.create',compact('bike_type'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'tipe_motor' => 'required|string',
            'gambar' => 'required|file|image',
        ]);

        $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();

        $image = $request->file('gambar')
            ->storeAs('public/images/tipe_motors/', $fileName);

        $store = BikeType::insert([
            'tipe_motor' => $request->tipe_motor,
            'gambar' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($store){

            return redirect()->route('admin.bike_type.index');
        }else{

            return redirect()->back();
        }
    }

}
