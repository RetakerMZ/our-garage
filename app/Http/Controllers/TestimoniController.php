<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('admin.testimoni.index',compact('testimonis'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'gambar' => 'required|file|image',
            'caption' => 'nullable|string',
        ]);

        $fileName = date("Y-m-d-His") . '_' . $request->file('gambar')->getClientOriginalName();

        $image = $request->file('gambar')
            ->storeAs('public/images/testimonis/', $fileName);

        $store = Testimoni::insert([
            'nama' => $request->nama,
            'gambar' => $fileName,
            'caption' => $request->caption,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($store){
            //Toastr::success('Data berhasil ditambahkan','Berhasil!');
            return redirect()->route('testimoni.index');
        }else{
            //Toastr::error('Data gagal ditambahkan, coba lagi','Gagal!');
            return redirect()->back();
        }

    }
    public function show(testimoni $testimoni)
    {
        //
    }

    public function edit($id)
    {
        $testimoni = Testimoni::find($id);
        return view('admin.testimoni.edit',compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'gambar' => 'required|file|image',
            'caption' => 'nullable|string',
        ]);
        if ($request->hasFile('gambar')) {
            $existingImage = Testimoni::find($id)->gambar;
            Storage::delete('public/images/testimonis/' . $existingImage);


            $fileName = date("Y-m-d-His") . '_' . $request->file('image')->getClientOriginalName();
            $image = $request->file('gambar')
                ->storeAs('public/images/testimonis/', $fileName);

            $image = Testimoni::find($id)->update([
                'gambar' => $fileName,
            ]);
        }
        $testimoni = Testimoni::find($id);
        $update = $testimoni->update([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        if($update){
            //Toastr::success('Data berhasil diedit','Berhasil!');
            return redirect()->route('testimoni.index');
        }else{
            //Toastr::error('Data gagal diedit, coba lagi','Gagal!');
            return redirect()->back();
        }

    }
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        $existingImage = Testimoni::find($id)->gambar;
        Storage::delete('public/images/testimonis/' . $existingImage);
        $delete = $testimoni->delete();
        if($delete){
            //Toastr::success('Testimoni berhasil dihapus','Berhasil!');
            return redirect()->route('testimoni.index');
        }else{
            //Toastr::error('Testimoni gagal dihapus, coba lagi','Gagal!');
            return redirect()->back();
        }
    }

}
