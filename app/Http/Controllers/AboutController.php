<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function intro()
    {
        return view('front.about.intro');
    }
}
