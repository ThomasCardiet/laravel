<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function album()
    {
        return view('album');
    }
}
