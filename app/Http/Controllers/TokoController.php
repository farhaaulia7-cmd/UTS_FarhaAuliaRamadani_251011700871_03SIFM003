<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function catalog()
    {
        return view('page.catalog'); 
    }

    public function home()
    {
        return view('page.home');
    }
    
    public function about()
    {
        return view('page.about');
    }

    public function contact()
    {
        return view('page.contact');
    }
}