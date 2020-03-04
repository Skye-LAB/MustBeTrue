<?php

namespace App\Http\Middleware;

use Closure;

class NotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->position == $role) {
            return $next($request);
        }
        return abort('403', 'Anda bukan ' . $role);
    }
}
