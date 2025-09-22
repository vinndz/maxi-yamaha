<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function services_details(){
        return view('pages.services-details');
    }

    public function team(){
        return view('pages.team');
    }

    public function team_details(){
        return view('pages.team-details');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }

    public function portfolio_details(){
        return view('pages.portfolio-details');
    }

    public function case_single(){
        return view('pages.case-single');
    }
    public function not_found(){
        return view('pages.404');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function blog_details(){
        return view('pages.blog-details');
    }

    public function contact(){
        return view('pages.contact');
    }
}