<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class BlogsController extends Controller
{
    public function blog()
    {
      $posts = DB::table('posts')
               ->orderBy('id', 'DESC')
               ->get();
       return view('front.blog.blogs', [
         'posts' => $posts
       ]);
    }
    public function post($slug)
    {
      $post = DB::table('posts')
               ->where('post_url', $slug)
               ->first();
      return view('front.blog.post', [
         'post' => $post
      ]);
    }
}
