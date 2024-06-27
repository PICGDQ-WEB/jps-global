<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class AdminPostsController extends Controller
{
    public function posts()
    {
        $posts = DB::table('posts')
        ->orderBy('id', 'desc')
        ->get();
        if(session()->has('master'))
        {
            return view('back.posts.posts', [
                'posts' => $posts
            ]);
        }
        else
        {
            return redirect('/master/dashboard');
        }
    }

    public function add()
    {
        if(session()->has('master'))
        {
            return view('back.posts.add');
        }
        else
        {
            return redirect('/master/dashboard');
        }
    }

    public function edit()
    {
        $pid = $_GET['pid'];
        $data = DB::table('posts')
                ->where('id', $pid)
                ->first();
        
        if(session()->has('master'))
        {
            return view('back.posts.edit', [
                'data' => $data
            ]);
        }
        else
        {
            return redirect('/master/dashboard');
        }
    }

    public function delete()
    {
        $pid = $_GET['pid'];
        $q = DB::table('blogs')
            ->where('id', $pid)
            ->delete();
        if($q)
        {
            return redirect()->back();
        }
        else
        {
            return redirect()->back();
        }
    }

    public function insertPost(Request $req)
    {
        //Banners Image
        $bannerImg = public_path().'/assets/images/blogs/';
        $bfile = $req->p_banner;
        if($bfile != "")
        {
            $banners = $bfile->getClientOriginalName();
            $bfile->move($bannerImg, $banners);
        }

        $q = DB::table('posts')->insert([
            'post_desc' => $req->post_desc,
            'post_title' => $req->post_title,
            'post_url' => $req->p_slug,
            'post_featured' => $banners,
        ]);
        if($q)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function updatePost(Request $req)
    {
        $id = $req->post_id;

        $prev = DB::table('posts')->where('id', $id)->first();

        $q = DB::table('posts')->where('id', $id);

        if($req->post_desc != $prev->post_desc)
        {
            $q->update(['post_desc'=>$req->post_desc]);
        }
        if($req->post_title != $prev->post_title)
        {
            $q->update(['post_title'=>$req->post_title]);
        }
        if($req->post_url != $prev->post_url)
        {
            $q->update(['post_url'=>$req->post_url]);
        }

        //Banners Image
        $bannerImg = public_path().'/assets/images/blogs/';
        $bfile = $req->featured_image;
        if($bfile != "")
        {
            $banners = $bfile->getClientOriginalName();
            if($banners != $prev->featured_image)
            {
                $query = $q->update(['post_featured' => $banners]);
                $bfile->move($bannerImg, $banners);
            }
        }

        if($q){ return true; }
        else{ return false; }

    }
}
