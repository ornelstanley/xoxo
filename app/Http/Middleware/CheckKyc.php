<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

use Auth;
class CheckKyc
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
        if(strtolower(Auth::user()->kycStatus) === 'verified')
        {
            return $next($request);
        }else{
            return redirect()->route('profile');
        }

    }
}
