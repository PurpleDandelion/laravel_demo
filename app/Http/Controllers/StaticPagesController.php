<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('mystatic_pages/home');
    }

    public function help()
    {
        return view('mystatic_pages/help');
    }

    public function about()
    {
        return view('mystatic_pages/about');
    }
}
