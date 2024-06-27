<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class ProductsController extends Controller
{
    public function products()
    {
        $products = DB::table('products')
                    ->get();
        return view('front.products.shop', [
            'products' => $products
        ]);
    }

    public function category($category)
    {
        $products = DB::table('products')
                    ->where('folder', $category)
                    ->get();
        // return $products;
        return view('front.products.folder', [
            'products' => $products,
            'category' => $category
        ]);
    }

    // public function product()
    // {
    //     return view('front.products.product');
    // }
}
