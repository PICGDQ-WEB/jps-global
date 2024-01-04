<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class MasterController extends Controller
{
    public function masterLogin(Request $req)
    {
        $q = DB::table('admin')
            ->where('username', $req->username)
            ->where('password', $req->password)
            ->first();
        if($q)
        {
            session()->put('master', $q->id);
            session()->put('masterName', $q->username);
            return redirect('/master/dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function dashboard()
    {
        if(session()->has('master'))
        {
            return view('back.dashData');
        }
        else
        {
            return redirect()->back();
        }
    }
}
