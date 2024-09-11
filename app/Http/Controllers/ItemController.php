<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function home()
    {
        return view('home');
    }


    public function items()
    {
        return view('item');
    }


    public function pictures()
    {
        return view('picture');
    }
}
