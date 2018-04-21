<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-home');
    }
    public function index1()
    {
        return "I am Admin 1";
    }
    public function logout()
    {
        $user = Auth::user();
        if(!is_null($user) && $user->is_admin==1)
        {
            Auth::logout();
            return redirect()->route('admin.login');
        }
        Auth::logout();
        return redirect()->route('login');
    }
}
