<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function registration()
    {
        return view('registration');
    }

    public function status()
    {
        return view('status');
    }
}
