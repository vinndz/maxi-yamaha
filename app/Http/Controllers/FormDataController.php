<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDataController extends Controller
{
    public function index()
    {
        return view('home.form-data');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'instagram' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        return redirect()->back()->with('success', 'Data successfully submitted.');
    }
}
