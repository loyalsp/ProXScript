<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        $request->merge(['is_admin' => '1']);
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password','is_admin');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    protected function authenticated(Request $request, $user)
    {
        Session::put('is_admin',true);
    }

    public function logout(Request $request)
    {
        if(Auth::user()->is_admin==1 && Session::get('is_admin'))
           $route = "/admin";
        else $route = "/login";
        $this->guard()->logout();
        Session::flush();
        Session::regenerate();
        $request->session()->invalidate();

        return redirect($route);
    }
}
