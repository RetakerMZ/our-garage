<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


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

    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'tipe_mobil' => 'required|string',
            'gambar' => 'required|file|image',
        ]);
        if ($request->hasFile('gambar')) {
            $existingImage = CarType::find($id)->gambar;
            Storage::delete('public/images/tipe_mobils/' . $existingImage);


            $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();
            $image = $request->file('gambar')
                ->storeAs('public/images/tipe_mobils/', $fileName);

            $image = CarType::find($id)->update([
                'gambar' => $fileName,
            ]);
        }

        $car = CarType::find($id);
        $update = $car->update([
            'tipe_mobil' => $request->tipe_mobil,
            'updated_at' => Carbon::now(),
        ]);
        if($update){
           // Toastr::success('Product berhasil diubah','Berhasil!');
            return redirect()->route('car.tipe.index')->with('Success','Data Berhasil Diubah');
        }else{
            //Toastr::error('Product gagal diubah, coba lagi','Gagal!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        //
        $car_type = CarType::find($id);
        $existingImage = CarType::find($id)->gambar;
        Storage::delete('public/images/tipe_mobils/' . $existingImage);
        $delete = $car_type->delete();
        if($delete){
            //Toastr::success('Product berhasil dihapus','Berhasil!');
            return redirect()->route('car.tipe.index');
        }else{
            //Toastr::error('Product gagal dihapus, coba lagi','Gagal!');
            return redirect()->back();
        }
    }


}
