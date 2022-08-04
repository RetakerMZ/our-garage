<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Bike;
use App\Models\BikeType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class BikeController extends Controller
{
    public function index()
    {
        $bike = Bike::all();
        return view('admin.bike.index',compact('bike'));
    }

    public function create()
    {
        $bike_type = BikeType::all();
        return view('admin.bike.create',compact('bike_type'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'fuel'=> 'required|string',
            'harga'=> 'required|numeric',
            'transmition' => 'required|string',
            'keterangan' => 'nullable|string',
            'gambar' => 'required|file|image',
        ]);

        $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();

        $image = $request->file('gambar')
            ->storeAs('public/images/bikes/', $fileName);

        $store = Bike::insert([
            'tipe_motor' => $request->tipe_motor,
            'name' => $request->name,
            'harga' => $request->harga,
            'fuel' => $request->fuel,
            'transmition' => $request->transmition,
            'rent' => 'no',
            'keterangan' => $request->keterangan,
            'gambar' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($store){

            return redirect()->route('admin.bike.index');
        }else{

            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string',
            'fuel'=> 'required|string',
            'harga'=> 'required|numeric',
            'transmition' => 'required|string',
            'keterangan' => 'nullable|string',
            'gambar' => 'required|file|image',
        ]);
        if ($request->hasFile('gambar')) {
            $existingImage = Bike::find($id)->gambar;
            Storage::delete('public/images/bikes/' . $existingImage);


            $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();
            $image = $request->file('gambar')
                ->storeAs('public/images/bikes/', $fileName);

            $image = Bike::find($id)->update([
                'gambar' => $fileName,
            ]);
        }

        $bike = Bike::find($id);
        $update = $bike->update([
            'name' => $request->name,
            'fuel'=> $request->fuel,
            'harga'=> $request->harga,
            'transmition' => $request->transmition,
            'keterangan' => $request->keterangan,
            'updated_at' => Carbon::now(),
        ]);
        if($update){
           // Toastr::success('Product berhasil diubah','Berhasil!');
            return redirect()->route('admin.motor.index')->with('Success','Data Berhasil Diubah');
        }else{
            //Toastr::error('Product gagal diubah, coba lagi','Gagal!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        //
        $bike = Bike::find($id);
        $existingImage = Bike::find($id)->gambar;
        Storage::delete('public/images/bikes/' . $existingImage);
        $delete = $bike->delete();
        if($delete){
            //Toastr::success('Product berhasil dihapus','Berhasil!');
            return redirect()->route('admin.bike.index');
        }else{
            //Toastr::error('Product gagal dihapus, coba lagi','Gagal!');
            return redirect()->back();
        }
    }
}
