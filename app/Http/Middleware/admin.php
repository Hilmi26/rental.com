<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD

=======
>>>>>>> 627362a3bdae5b00d7bc978b2fb0549cd7c691d2
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin
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
        if (!Auth::user()){
            return redirect('login');
        }elseif (Auth::user()->role != 'admin'){
=======
        if  (Auth::user()->role != 'admin'){
>>>>>>> 627362a3bdae5b00d7bc978b2fb0549cd7c691d2
            return redirect('login');
        }
        return $next($request);
    }
}
