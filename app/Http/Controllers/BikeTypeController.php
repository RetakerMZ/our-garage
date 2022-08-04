<?php

namespace App\Http\Controllers;

use App\Models\BikeType;
use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

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

    public function edit($id)
    {
        //
        $bike_type = BikeType::find($id);
        return view ('admin.bike_type.edit',compact('bike_type'));
    }

    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'tipe_motor' => 'required|string',
            'gambar' => 'required|file|image',
        ]);
        if ($request->hasFile('gambar')) {
            $existingImage = BikeType::find($id)->gambar;
            Storage::delete('public/images/tipe_motors/' . $existingImage);


            $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();
            $image = $request->file('gambar')
                ->storeAs('public/images/tipe_motors/', $fileName);

            $image = BikeType::find($id)->update([
                'gambar' => $fileName,
            ]);
        }

        $bike = BikeType::find($id);
        $update = $bike->update([
            'tipe_motor' => $request->tipe_motor,
            'updated_at' => Carbon::now(),
        ]);
        if($update){
           // Toastr::success('Product berhasil diubah','Berhasil!');
            return redirect()->route('admin.bike_type.index')->with('Success','Data Berhasil Diubah');
        }else{
            //Toastr::error('Product gagal diubah, coba lagi','Gagal!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        //
        $bike_type = BikeType::find($id);
        $existingImage = BikeType::find($id)->gambar;
        Storage::delete('public/images/tipe_motors/' . $existingImage);
        $delete = $bike_type->delete();
        if($delete){
            //Toastr::success('Product berhasil dihapus','Berhasil!');
            return redirect()->route('admin.bike_type.index');
        }else{
            //Toastr::error('Product gagal dihapus, coba lagi','Gagal!');
            return redirect()->back();
        }
    }
}
