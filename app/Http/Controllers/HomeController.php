<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_one_page(){
        return view('home.index-one-page');
    }

}