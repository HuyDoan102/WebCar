<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotStoreAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = "admin")
    {
        if (!auth()->guard($guard)->check()) {
            return redirect('/admins/login');
        }

        return $next($request);
    }
}
