<?php

namespace App\Http\Middleware;

use Closure;

class CheckCustomerData
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
        if (! $request->user()->customer) {
            return redirect()->route('customer.create');
        }
        return $next($request);
    }
}
