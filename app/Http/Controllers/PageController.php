<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
{
    return view('home');
}

public function about()
{
    return view('about', ['name' => 'Laiba Gul', 'rollNo' => 'F23-0390']);
}

public function contact()
{
    return view('contact');
}
}
