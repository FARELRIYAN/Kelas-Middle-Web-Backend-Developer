<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
