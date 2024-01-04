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
        if(session()->has('user'))
        {
            return view('back.posts.posts', [
                'posts' => $posts
            ]);
        }
        else
        {
            return redirect('/dq-admin');
        }
    }

    public function add()
    {
        if(session()->has('user'))
        {
            return view('back.posts.add');
        }
        else
        {
            return redirect('/dq-admin');
        }
    }

    public function edit()
    {
        $pid = $_GET['pid'];
        $data = DB::table('blogs')
                ->where('id', $pid)
                ->first();
        
        if(session()->has('user'))
        {
            return view('back.posts.edit', [
                'data' => $data
            ]);
        }
        else
        {
            return redirect('/dq-admin');
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
        $bfile = $req->featured_image;
        if($bfile != "")
        {
            $banners = $bfile->getClientOriginalName();
            $bfile->move($bannerImg, $banners);
        }

        $q = DB::table('blogs')->insert([
            'post_desc' => $req->post_desc,
            'post_title' => $req->post_title,
            'p_slug' => $req->p_slug,
            'featured_image' => $banners,
            'head_scripts' => $req->head_scripts,
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
        $id = $req->id;

        $prev = DB::table('blogs')->where('id', $id)->first();

        $q = DB::table('blogs')->where('id', $id);

        if($req->post_desc != $prev->post_desc)
        {
            $q->update(['post_desc'=>$req->post_desc]);
        }
        if($req->post_title != $prev->post_title)
        {
            $q->update(['post_title'=>$req->post_title]);
        }
        if($req->p_slug != $prev->p_slug)
        {
            $q->update(['p_slug'=>$req->p_slug]);
        }
        if($req->short_desc != $prev->short_desc)
        {
            $q->update(['short_desc'=>$req->short_desc]);
        }
        if($req->head_scripts != $prev->head_scripts)
        {
            $q->update(['head_scripts'=>$req->head_scripts]);
        }

        //Banners Image
        $bannerImg = public_path().'/assets/images/blogs/';
        $bfile = $req->featured_image;
        if($bfile != "")
        {
            $banners = $bfile->getClientOriginalName();
            if($banners != $prev->featured_image)
            {
                $query = $q->update(['featured_image' => $banners]);
                $bfile->move($bannerImg, $banners);
            }
        }

        if($q){ return true; }
        else{ return false; }

    }
}
