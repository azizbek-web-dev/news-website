<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // For now, we'll make the first user an admin
        // In a real application, you'd have a proper admin role system
        if (auth()->user()->id !== 1) {
            abort(403, 'Access denied. Admin privileges required.');
        }

        return $next($request);
    }
}
