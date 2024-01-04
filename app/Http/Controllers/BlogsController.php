<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blog()
    {
       return view('front.blog.blogs');
    }
    public function post()
    {
       return view('front.blog.post');
    }
}
