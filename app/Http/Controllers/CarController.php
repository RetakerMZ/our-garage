<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
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

    public function edit($id)
    {
        //
        $car = Car::find($id);
        $car_type = CarType::orderBy('tipe_mobil')->get();
        return view ('admin.car.car.edit',compact('car', 'car_type'));
    }

    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'fuel'=> 'required|string',
            'seat'=> 'required|string',
            'harga'=> 'required|numeric',
            'transmition' => 'required|string',
            'gambar' => 'required|file|image',
        ]);
        if ($request->hasFile('gambar')) {
            $existingImage = Car::find($id)->gambar;
            Storage::delete('public/images/cars/' . $existingImage);


            $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();
            $image = $request->file('gambar')
                ->storeAs('public/images/cars/', $fileName);

            $image = Car::find($id)->update([
                'gambar' => $fileName,
            ]);
        }

        $car = Car::find($id);
        $update = $car->update([
            'nama' => $request->nama,
            'fuel'=> $request->fuel,
            'seat'=> $request->seat,
            'harga'=> $request->harga,
            'transmition' => $request->transmition,
            'updated_at' => Carbon::now(),
        ]);
        if($update){
           // Toastr::success('Product berhasil diubah','Berhasil!');
            return redirect()->route('car.car.index')->with('Success','Data Berhasil Diubah');
        }else{
            //Toastr::error('Product gagal diubah, coba lagi','Gagal!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        //
        $car = Car::find($id);
        $existingImage = Car::find($id)->gambar;
        Storage::delete('public/images/cars/' . $existingImage);
        $delete = $car->delete();
        if($delete){
            //Toastr::success('Product berhasil dihapus','Berhasil!');
            return redirect()->route('car.car.index');
        }else{
            //Toastr::error('Product gagal dihapus, coba lagi','Gagal!');
            return redirect()->back();
        }
    }

}
