<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Camera;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class CameraController extends Controller
{
    public function index()
    {
        $camera = Camera::all();
        return view('admin.camera.index',compact('camera'));
    }

    public function edit($id)
    {
        //
        $camera = Camera::find($id);
        return view ('admin.camera.edit',compact('camera'));
    }


    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'pixel'=> 'required|string',
            'battrey'=> 'required|string',
            'display'=> 'required|string',
            'optical_zoom'=> 'required|string',
            'memory'=> 'required|string',
            'harga'=> 'required|numeric',
            'gambar' => 'required|file|image',
            'keterangan' => 'nullable|string',
            
        ]);

        $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();

        $image = $request->file('gambar')
            ->storeAs('public/images/cameras/', $fileName);

        $store = Camera::insert([
            'nama' => $request->nama,
            'pixel' => $request->pixel,
            'battrey' => $request->battrey,
            'display' => $request->display,
            'optical_zoom' => $request->optical_zoom,
            'memory' => $request->memory,
            'harga' => $request->harga,
            'gambar' => $fileName,
            'keterangan' => $request->keterangan,
            'rent' => 'no',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($store){

            return redirect()->route('admin.camera.index');
        }else{

            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'pixel'=> 'required|string',
            'battrey'=> 'required|numeric',
            'display' => 'required|string',
            'optical_zoom' => 'nullable|string',
            'memory' => 'required|string',
            'harga'=> 'required|numeric',
            'keterangan' => 'nullable|string',
            'gambar' => 'required|file|image',
        ]);
        if ($request->hasFile('gambar')) {
            $existingImage = Camera::find($id)->gambar;
            Storage::delete('public/images/cameras/' . $existingImage);


            $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();
            $image = $request->file('gambar')
                ->storeAs('public/images/cameras/', $fileName);

            $image = Camera::find($id)->update([
                'gambar' => $fileName,
            ]);
        }

        $camera = Camera::find($id);
        $update = $camera->update([
            'nama' => $request->nama,
            'pixel' => $request->pixel,
            'battrey' => $request->battrey,
            'display' => $request->display,
            'optical_zoom' => $request->optical_zoom,
            'memory' => $request->memory,
            'harga' => $request->harga,
            'gambar' => $fileName,
            'keterangan' => $request->keterangan,
            'rent' => 'no',
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
        $camera = Camera::find($id);
        $existingImage = Camera::find($id)->gambar;
        Storage::delete('public/images/cameras/' . $existingImage);
        $delete = $camera->delete();
        if($delete){
            //Toastr::success('Product berhasil dihapus','Berhasil!');
            return redirect()->route('admin.camera.index');
        }else{
            //Toastr::error('Product gagal dihapus, coba lagi','Gagal!');
            return redirect()->back();
        }
    }
    public function available ($id)
    {
        //
        $camera = Camera::find($id);
        $update = $camera->update([
            'rent' => 'no',
        ]);
        return back();
    }

    public function rented ($id)
    {
        //
        $camera = Camera::find($id);
        $update = $camera->update([
            'rent' => 'yes',
        ]);
        return back();
    }
}
