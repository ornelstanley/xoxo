<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

use Auth;
class CheckIsPro
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
        if(Auth::user()->isPro === 1)
        {
            return $next($request);
        }else{
            return redirect()->route('home');
        }

    }
}
