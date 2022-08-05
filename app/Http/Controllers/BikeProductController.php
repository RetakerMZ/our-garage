<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\BikeType;
use Illuminate\Http\Request;

class BikeProductController extends Controller
{
    public function index(Request $request)
    {
        $bike = Bike::all();
        $type = BikeType::all();
        if(!empty($request->tipe_motor)){
            if(count($request->tipe_motor) != count($type)){
                $bike = $bike->whereIn('tipe_motor',$request->tipe_motor);
            }
        }

        return view('bike.bike',compact('bike','type'));
    }
    public function allbike(Request $request)
    {
        $bike = Bike::find($request->id);
        $type = BikeType::all();

        return view('bike.bike_detail',compact('bike','type'));
    }
}
