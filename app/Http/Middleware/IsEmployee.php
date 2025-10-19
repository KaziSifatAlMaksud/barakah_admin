<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsEmployee
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->role === 'employee') {
            return $next($request);
        }

        abort(403, 'Unauthorized'); // optional: redirect('/'); 
    }
}

