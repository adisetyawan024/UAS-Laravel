<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class guestLogin
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
        if ($request->session()->has('nama') && $request->session()->has('password')) {
            return redirect('admin/home');
        }
        return $next($request);
    }
}
