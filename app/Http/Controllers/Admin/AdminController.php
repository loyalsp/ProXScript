<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-home');
    }

    public function switch_()
    {
        if(!is_null(Session::get('adminAsUser')) && !Session::get('adminAsUser'))
        {
            Session::put('adminAsUser',true);
            return redirect()->route('home');
        }
        else if(Session::get('adminAsUser'))
        {
            Session::put('adminAsUser',false);
            return redirect()->route('admin.index');
        }
        else return response("Not Authorized",404);
    }
}
