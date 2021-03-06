<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
        public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if (!is_null($user) && Auth::user()->is_admin == 1) {
            return $next($request);
        }

        return redirect('/admin/login');
    }

}
