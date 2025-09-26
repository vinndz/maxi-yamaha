<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Cek hardcode admin
        if ($username === 'admin' && $password === 'admin') {
            return redirect()->route('dashboard-admin')->with('success', 'Login successfully as Admin!');
        }

        // Cari user di database
        $user = User::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Login manual
            Auth::login($user);
            return redirect()->route('dashboard-admin')->with('success', 'Login successfully!');
        }

        return redirect()->route('login')->with('error', 'Username or Password Incorrect!');
    }
}
