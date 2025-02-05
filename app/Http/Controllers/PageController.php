<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage()
    {
        return view('landingpage');
    }

    public function home()
    {
        return view('home');
    }
}
