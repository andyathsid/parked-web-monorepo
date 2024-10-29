<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $tittle = "Don't have acces";
        $imgError = "assets/img/403";
        $error = "403";
        $desError = "Don't have acces Go Back";
        if ($request->user()->role !== $role) {
            return response()->view('errors.403', compact('tittle', 'imgError', 'error', 'desError'), 403);
        }

        return $next($request);
    }
}
