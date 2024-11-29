<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and is an admin
        if (auth()->check() && auth()->user()->is_admin == 1) {
            return $next($request);
        }

        // Redirect if the user is not an admin
        return redirect('/')->with('error', 'Access denied!');
    }
}
