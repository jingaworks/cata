<?php

namespace App\Http\Middleware;

use Closure;

class HaveCustomerData
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
        if ($request->user()->customer) {
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
