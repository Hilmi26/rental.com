<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class rental
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
<<<<<<< HEAD
        if (!Auth::user()) {
            return redirect('login');
        } elseif (Auth::user()->role_id != 'rental') {
            return redirect('login');
        }
        return $next($request);
=======
        if  (Auth::user()->role == 'rental'|| Auth::user()->role == 'admin'){
            return $next($request);
        }else {
            return redirect('login');
        }
>>>>>>> 627362a3bdae5b00d7bc978b2fb0549cd7c691d2
    }
}
