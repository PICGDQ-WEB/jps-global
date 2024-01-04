<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        return view('front.products.shop');
    }
    public function product()
    {
        return view('front.products.product');
    }
}
