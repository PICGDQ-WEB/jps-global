<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class AdminProductsController extends Controller
{
    public function products()
    {
        $products = DB::table('products')
                ->get();
        $categories = DB::table('category')
                        ->orderBy('cat_name', 'asc')
                        ->get();
        return view('back.products.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function add(Request $req)
    {
        $folder = date('dmyhis').rand(1111,9999);
        $path = public_path().'/front/media/products/'.$folder.'/';
        $images = $req->file('product_images');
        foreach($images as $image)
        {
            $image = $image->getClientOriginalName();
            $image->move($path, $image);
            $imageObject[] = $image;
        }
        $q = DB::table('products')
                ->insert([
                    'product_title' => $req->product_title,
                    'product_desc' => $req->product_desc,
                    'folder' => $folder,
                    'product_images' => $imageObject,
                    'product_category' => $req->product_category
                ]);
    }
}
