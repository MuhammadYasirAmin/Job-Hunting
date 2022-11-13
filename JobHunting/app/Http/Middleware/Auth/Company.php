<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Company
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
        if (!Auth::guard('Company')->check()) {
            return redirect()->route('Comapny.Login')->with('Error!', 'Plz Login First');
        }

        return $next($request);
    }
}