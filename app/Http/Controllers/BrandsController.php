<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands()
    {
        return view('front.brands');
    }
}
