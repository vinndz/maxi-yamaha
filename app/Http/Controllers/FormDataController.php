<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class FormDataController extends Controller
{
    public function index()
    {
        return view('home.form-data');
    }


    public function store(Request $request)
    {
        // ✅ Validasi input
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
            'instagram' => 'required',
            'category'      => 'required',
            'type_motorcycle'      => 'required',
            'cost_estimation'      => 'required',
            'link'      => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // ✅ Ambil file
        $image     = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // ✅ Pastikan folder ada
        $dir = storage_path('app/public/images');
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        // ✅ Simpan file
        $image->move($dir, $imageName);

        // ✅ Log path (cek di storage/logs/laravel.log)
        Log::info('Image saved to: ' . $dir . '/' . $imageName);

        // ✅ Simpan data ke database
        $formData = new FormData();
        $formData->name      = $validatedData['name'];
        $formData->email     = $validatedData['email'];
        $formData->phone     = $validatedData['phone'];
        $formData->instagram = $validatedData['instagram'];
        $formData->category      = $validatedData['category'];
        $formData->type_motorcycle      = $validatedData['type_motorcycle'];
        $formData->cost_estimation      = $validatedData['cost_estimation'];
        $formData->link      = $validatedData['link'];
        $formData->image     = $imageName; // simpan nama file
        $formData->save();

        return back()->with('success', 'Data submitted successfully!');
    }

    
}
