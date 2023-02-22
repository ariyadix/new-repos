<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role1, $role2, $role3 = false)
    {
        if (
            $request->user()->level == $role1 ||
            $request->user()->level == $role2 ||
            $request->user()->level == $role3 
        ) {
            return $next($request);
        }
        return redirect('/');
    }
}
